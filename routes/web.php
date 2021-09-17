<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front/accomodation');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Ajax Routes
Route::match(['post'], 'country', 'AjaxController@country')->name('country');
Route::match(['post'], 'state', 'AjaxController@state')->name('state');
Route::match(['post'], 'city', 'AjaxController@city')->name('city');

Route::match(['post'], 'branch-manager', 'AjaxController@branch_Manager')->name('branch-manager');

// Admin Routes

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
	
	
	Route::get('/', 'AdminAuth@index')->name('admin.login');
	Route::get('/login', 'AdminAuth@loginRedirect')->name('admin.login.redirect');
	Route::get('/logout', 'AdminAuth@logout')->name('admin.logout');
	Route::post('/login', 'AdminAuth@check')->name('admin.login.check');


    Route::group(['middleware' => 'verifier'], function () {
        //Dashboard Routes
        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('/', 'Dashboard@index')->name('admin.dashboard');
        });
        
        //Booking Routes
        Route::group(['prefix' => 'booking'], function () {
            Route::get('/new-booking', 'Booking@create')->name('admin.new-booking');
        
        });
        
        
        //Admin menu users Routes
        
        Route::match(['get'], '/branch/export', 'BranchController@export')->name('branch.export');
        Route::match(['get'], '/branch/data', 'BranchController@data')->name('branch.data');
        Route::match(['get'], '/branch/status/{id}', 'BranchController@status')->name('branch.status');
        Route::resource("/branch", "BranchController");
        
    });
});



