<?php
namespace App\Http\Controllers\API;

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
use Illuminate\Support\Facades\DB;

class HotelApi extends Controller
{
    use Sms;
    public function city(Request $request){
        $search = $request->has("search")?$request->search:"";
        $page = $request->has("page")?$request->page:1;
        $perPage = 30;
        
        $offset = 0;
        if($page > 1){
            $offset = ($page - 1)*$perPage;
        }
        
        
        if($search != ""){
            $cities = DB::table('api_city')
                ->where('city_name', 'like', '%'.$search.'%')
                ->offset($offset)->limit($perPage)
                ->get(); 
        }else{
            $cities = DB::table('api_city')
                ->offset($offset)->limit($perPage)
                ->get(); 
        }
        
        if(count($cities) > 0){
            $response = ["status" => 1, "message" => "City found","data"=>$cities];
        }else{
            $response = ["status" => 0, "message" => "No city found!","data"=>array()];
        }
        
        return response($response, 200);
        
    }
    public function hotels(Request $request){
	    $client = new Client();
        
        $hotel_username = "TestEDT";
        $hotel_password = "EdT9Test";
        $hotel_pin      = "1010";
        
        $currency = ($request->currency_code != "")?$request->currency_code:"USD";
        $client_nationality = ($request->client_nationality != "")?$request->client_nationality:"IN";
        $city_id = ($request->city_id != "")?$request->city_id:"12085";
        
        $check_in_date = ($request->check_in_date != "")?date("Y-m-d",strtotime($request->check_in_date)):"2021-08-03";
        $check_out_date = ($request->check_out_date != "")?date("Y-m-d",strtotime($request->check_out_date)):"2021-08-05";
        
        $total_room = ($request->total_room != "")?$request->total_room:"1";
        $total_adult = ($request->total_adult != "")?$request->total_adult:"1";
        $total_child = ($request->total_child != "")?$request->total_child:"0";
        
        $post = $request->all();
        $xml = '<?xml version="1.0" encoding="utf-8"?>
                <Inseparable>
                    <AccommodationSearch>
                        <RQ>
                            <UserName>'.$hotel_username.'</UserName>
                            <Password>'.$hotel_password.'</Password>
                            <Pin>'.$hotel_pin.'</Pin>
                            <SearchFilter>
                                <Currency>'.$currency.'</Currency>
                                <ClientNationality>'.$client_nationality.'</ClientNationality>
                                <CityId>'.$city_id.'</CityId>
                                <CheckInDate>'.$check_in_date.'</CheckInDate>
                                <CheckOutDate>'.$check_out_date.'</CheckOutDate>
                                <RoomWiseSearch>
                                    <Room>
                                        <RoomNo>'.$total_room.'</RoomNo>
                                        <Adult>'.$total_adult.'</Adult>
                                        <Child>'.$total_child.'</Child>
                                    </Room>
                                </RoomWiseSearch>
                            </SearchFilter>
                        </RQ>
                    </AccommodationSearch>
                </Inseparable>';
        
            try {

                 $create = $client->request('POST', 'http://accommodationapi.inseparabletech.com/AccommodationService.svc/xml', [
                    'headers' => [
                        'Content-Type' => 'application/xml;',
                    ],
                    'body' => $xml,
                    'connect_timeout' => 10
                ]);
                //dd($create->getBody());
            
                $create->getStatusCode();
                $create->getHeader('content-type');
                $create->getBody();
                // $response = $client->send($create);
            
                $xml_string = preg_replace('/(<\?xml[^?]+?)utf-16/i', '$1utf-8', $create->getBody());
                $xml_string = $create->getBody();
                //dd($xml_string);
                $hotels = simplexml_load_string($xml_string);
            
                // dd($hotels);
                // Here the code for successful request
                $response = ["status" => 1, "message" => "Successfully","data"=>$hotels];
                return response($response, 200);
            
            } catch (RequestException $e) {
            
                // Catch all 4XX errors 
                
                // To catch exactly error 400 use 
                if ($e->hasResponse()){
                    if ($e->getResponse()->getStatusCode() == '400') {
                            echo "Got response 400";
                        $response = ["status" => 0, "message" => "Got response 400","data"=>array()];
                        return response($response, 200);
                    }
                }
                $response = ["status" => 0, "message" => "Exception Found","data"=>array()];
                return response($response, 200);
            
                // You can check for whatever error status code you need 
                
            } catch (\Exception $e) {
            
                // There was another exception.
                $response = ["status" => 0, "message" => "Exception Found","data"=>array()];
                return response($response, 200);
            
            }
       
	}
    public function tours(Request $request){
        
	    $client = new Client();
        
        $tour_username = "TestEDT";
        $tour_password = "EdT9Test";
        $tour_pin      = "1010";
        
        $currency = ($request->currency_code != "")?$request->currency_code:"USD";
        $city_id = ($request->city_id != "")?$request->city_id:"12085";
        $service_date = ($request->service_date != "")?date("Y-m-d",strtotime($request->service_date)):"2021-08-03";
        $total_adult = ($request->total_adult != "")?$request->total_adult:"1";
        
        
        $body = [
                    "UserName"      =>$tour_username,
                    "Password"      =>$tour_password,
                    "PIN"           =>$tour_pin,
                    "CityId"        =>$city_id,
                    "ServiceDate"   =>$service_date,
                    "Adult"         =>$total_adult,
                    "Currency"      =>$currency
                ];
        try{
            
        
            $getResponse = $client->post('http://TourAPIV2.inseparabletech.com/TourAPIService.svc/Search', [
                'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
                'body'    => json_encode($body)
            ]); 
            
            $tours = json_decode($getResponse->getBody(), true);
                    // Here the code for successful request
            $response = ["status" => 1, "message" => "Successfully","data"=>$tours];
            return response($response, 200);
            
        } catch (RequestException $e) {
            
            // Catch all 4XX errors 
            
            // To catch exactly error 400 use 
            if ($e->hasResponse()){
                if ($e->getResponse()->getStatusCode() == '400') {
                        echo "Got response 400";
                    $response = ["status" => 0, "message" => "Got response 400","data"=>array()];
                    return response($response, 200);
                }
            }
            $response = ["status" => 0, "message" => "Exception Found","data"=>array()];
            return response($response, 200);
        
            // You can check for whatever error status code you need 
            
        } catch (\Exception $e) {
        
            // There was another exception.
            $response = ["status" => 0, "message" => "Exception Found","data"=>array()];
            return response($response, 200);
        
        }
       
       
	}
}




