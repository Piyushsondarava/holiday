<?php
namespace App\Http\Controllers\API;
// use DB;
// use URL;

// use Mail;

// use DateTime;
// use App\ReferralData;
// use App\PasswordResets;
// use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\User;
use App\Traits\Sms;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class AuthController extends Controller
{
    use Sms;
    public function login_signup_mobile(Request $request) {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|numeric',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = User::where(['mobile'=> $request->mobile])->first();
        if ($user) {
            if ($user->status == 1) {
                $otpSms = $this->SendOtpTo($request->mobile);
                User::where(["id"=>$user->id])->update(["otp"=>$otpSms]);
                $response = ["status" => 1, "message" =>'Welcome back to '.config('app.name').'. We have sent you otp on your register mobile number.',"otp"=>$otpSms];
                return response($response, 200);
            } else {
                $response = ["status" => 0, "message" => "User is currently blocked"];
                return response($response, 422);
            }
        } else {
            $otpSms = $this->SendOtpTo($request->mobile);
            $user = User::create(["mobile"=>$request->mobile, "otp"=>$otpSms]);
            $response = ["status" => 1, "message" =>'Welcome to '.config('app.name').'. We have sent you otp on your register mobile number.',"otp"=>$otpSms];
            return response($response, 200);
        }
    }
    public function social_login(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'register_type' => 'required|numeric',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        if($request->email != ""){
            $row = User::where(['email'=> $request->email,'social_id'=> $request->social_id])->first();
        	
        	if(!empty($row)){
        	    //Email already exist
        	    $response = ["status" => 0, "message" => "Email is already registered. Please login with email and password"];
                return response($response, 422);
        	}
        }
        $user_type = 3;//2 consult
        if ($request->social_id != "") {
    
            
        	$row = User::where(['social_id'=> $request->social_id])->first();
        	//echo $row['id']; exit();
        	
        	
        	
        	
        	if(!empty($row)){
        	    //Already register update
        	    if ($row->status == 1) {
                    User::where(["social_id"=>$row->social_id])->update(
                        [
                            "name"=>$request->name,
                            "email"=>$request->email,
                            "social_pic"=>$request->social_pic,
                            "userType"=>$user_type,
                            "social_token"=>$request->social_token,
                            "firebase_token"=>$request->firebase_token,
                            "register_type"=>$request->register_type,
                        ]);
                    $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                    $response = ["status" => 1, "message" =>'Welcome back to '.config('app.name').'. You are successfully logged in.'];
                    $response['token'] = isset($token->token)?$token->token:"";
                    $response['data'] = $user;
                } else {
                    $response = ["status" => 0, "message" => "User is currently blocked"];
                    return response($response, 422);
                }
        	}else{
        	    //Add to database insert
        	    
        	    $user = User::create(
        	            [
                            "social_id"=>$request->social_id,
                            "name"=>$request->name,
                            "email"=>$request->email,
                            "social_pic"=>$request->social_pic,
                            "userType"=>$user_type,
                            "social_token"=>$request->social_token,
                            "firebase_token"=>$request->firebase_token,
                            "register_type"=>$request->register_type,
                        ]);
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ["status" => 1, "message" =>'Welcome  to '.config('app.name').'. You are successfully logged in.'];
                $response['token'] = isset($token->token)?$token->token:"";
                $response['data'] = $user;
        	}
      
        }else{
            $response = ["status" => 0, "message" => "Social Id is required"];
            return response($response, 422);
        }
        
    }
    public function verify_OTP(Request $request) {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|numeric',
            'otp' => 'required|numeric',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = User::where(['mobile'=> $request->mobile,'otp'=> $request->otp])->first();
        if ($user) {
            if ($user->status == 1) {
                
                User::where(["id"=>$user->id])->update(
                        [
                            "firebase_token"=>$request->firebase_token
                        ]);
                        
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ["status" => 1, "message" =>'Welcome back to '.config('app.name').'. You are successfully logged in.'];
                $response['token'] = isset($token->token)?$token->token:"";
                $data = [
                            "id"    =>  $user->id,
                            "mobile"    =>  $user->mobile,
                        ];
                $response['data'] = $data;
                return response($response, 200);
            } else {
                $response = ["status" => 0, "message" => "User is currently blocked"];
                return response($response, 422);
            }
        } else {
            $response = ["status" => 0, "message" => "User does not exist!"];
            return response($response, 422);
        }
    }
   
}
