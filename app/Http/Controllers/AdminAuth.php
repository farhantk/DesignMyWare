<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    public function index(){
        return view('Admin.signin');
    }
}
