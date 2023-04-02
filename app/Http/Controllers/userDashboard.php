<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userDashboard extends Controller
{
    public function index(){
        return view('User.Dashboard.dashboard');
    }
    public function editProfile(){
        return view('User.Dashboard.dashboard');
    }
}
