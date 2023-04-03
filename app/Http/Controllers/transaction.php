<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transaction extends Controller
{
    public function index(){
        return view('User.Transaction.index');
    }
}
