<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Booking extends Controller
{
    
    public function index()
    {
        //Admin login page here
        echo "test";
        // session()->flash('message',"testing");
        // session()->flash('type',"warning");
        // return view('Admin.Dashboard.dashboard');
    }

    public function create()
    {
        //Admin Register page here
        session()->flash('pageTitle', 'New Booking');
        return view('Admin.Booking.new_booking');
    }

    public function store(Request $request)
    {
        //Register new 
    }
    
    public function check(Dashboard $adminAuth)
    {
        //
        dd($adminAuth);
    }


    public function logout()
    {
        //
    }
}
