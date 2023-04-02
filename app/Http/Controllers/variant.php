<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class variant extends Controller
{
    public function index(){
        return view('Admin.variant.index');
    }
}
