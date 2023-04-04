<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use Illuminate\Support\Facades\Http;

class transaction extends Controller
{
    public function index(){
        return view('User.Transaction.index');
    }
    public function detail($orderid){
        //$transaction = order::where('id', $orderid)->first();
        //$api_key = '93287c406bf763bea8b9eace627479ef7b4137e88dadb76db3247968deece4ed';
        //$receipt_code = $transaction->receipt_code ;
        //$courir = $transaction->courir ;
        //$res = Http::get('https://api.binderbyte.com/v1/track?api_key='.$api_key.'&courier='.$courir.'&awb='.$receipt_code);
        return view('User.Transaction.detail');
    }
}