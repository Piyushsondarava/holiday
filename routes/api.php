<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::namespace ('API')->middleware(['throttle','cors', 'json.response'])->group(function () {
    
    Route::post('/login', 'AuthController@login_signup_mobile');
    Route::post('/verify-otp', 'AuthController@verify_OTP'); 
    Route::post('/social-login', 'AuthController@social_login'); 
    
    Route::post('/hotels', 'HotelApi@hotels'); 
    Route::post('/city', 'HotelApi@city'); 
    
    Route::post('/tours', 'HotelApi@tours'); 
});



