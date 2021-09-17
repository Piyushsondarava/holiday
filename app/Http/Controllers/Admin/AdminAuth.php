<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;

use App\Models\User;


class AdminAuth extends Controller
{
    public function index()
    {
        //Admin login page here
        if(Auth::check()){
            return redirect(route('admin.dashboard'));    
        }
        return view('Admin.auth.login');
    }
    public function loginRedirect(){
        return redirect(route("admin.login")); // redirection to login screen
    }
    public function create()
    {
        //Admin Register page here
    }

    public function store(Request $request)
    {
        //Register new 
       
    }
    
    public function check(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
        ]);
        
        $authenticated = Auth::attempt([
            "email" => $request['email'] , 
            "password" => $request['password']
            ]);
        if($authenticated !== FALSE && (Auth::user()->userType == 1)){
            $userInfo = array(
                    "id"    =>  Auth::user()->id,
                    "name"    =>  Auth::user()->name,
                    "email"    =>  Auth::user()->email,
                    "profile_photo_path"=>  Auth::user()->profile_photo_path,
                    "userType"=>  Auth::user()->userType,
                    "created_at"=>  Auth::user()->created_at,
                );
            session(['userInfo' => $userInfo]);
            return redirect(route("admin.dashboard"));
        }else{
            return redirect()->back()->withErrors(array('errors'=>array("email"=>"Cradentials are invalid")));
        }
    }


    public function logout()
    {
        session()->flush();
        Auth::logout(); // logging out user
        return redirect(route("admin.login")); // redirection to login screen
    }
}
