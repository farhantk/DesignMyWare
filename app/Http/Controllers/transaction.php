<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\expedition;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class transaction extends Controller
{
    public function view_checkout(){
        $expeditions = expedition::all();
        $user = auth()->user();
        return view('User.Checkout.index', compact('expeditions', 'user'));
    }
    public function checkout(){
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:4',
            'phone_number' => 'required|max:14|min:4',
            'province' => 'required|max:50|min:4',
            'city' => 'required|max:50|min:4',
            'subdistrict' => 'required|max:50|min:4',
            'ward' => 'required|max:50|min:4',
            'zip' => 'required|max:10|min:4',
            'street' => 'required|max:255|min:10',
        ]);
        User::where('id',auth()->user()->id)
            ->update($validatedData);
        /*
        order::where('id',auth()->user()->id)
            ->update($validatedData);
        */
        return view('User.Checkout.index', compact('expeditions', 'user'));
    }
    public function index(){
        $transaction = order::where('id', 1)->first();
        $api_key = '33aab934c83c7d3f23a5e1f6e055efdc6f6653284770962e8d4711c46f9d2aa0';
        $receipt_code = $transaction->receipt_code ;
        $courir = $transaction->courir ;
        $res = Http::get('https://api.binderbyte.com/v1/track?api_key='.$api_key.'&courier='.$courir.'&awb='.$receipt_code);
        $track = json_decode($res, true);
        //dd($track);
        return view('User.Transaction.index',compact('track'));
    }
    /*
    public function detail($orderid){
        $transaction = order::where('id', $orderid)->first();
        $api_key = '93287c406bf763bea8b9eace627479ef7b4137e88dadb76db3247968deece4ed';
        $receipt_code = $transaction->receipt_code ;
        $courir = $transaction->courir ;
        //$res = Http::get('https://api.binderbyte.com/v1/track?api_key='.$api_key.'&courier='.$courir.'&awb='.$receipt_code);
        //$data = json_decode($res, true);
        dd($data);
        return view('User.Transaction.detail',  compact('data'));
    }
    */
}