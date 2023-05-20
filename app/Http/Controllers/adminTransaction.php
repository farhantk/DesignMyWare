<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class adminTransaction extends Controller
{
    public function index(){
        $orders = order::orderBy('created_at', 'desc')->get();
        return view('Admin.transaction.index', compact('orders'));
    }
    public function process($orderId){
        order::where('id', $orderId)
            ->update(['status'=>'Diproses']);
        return redirect('/admin/transaction');
    }
    public function deliver(Request $request, $orderId){
        $validetedData = $request->validate([
            'receipt_code'=>'required|min:5|max:30'
        ]);
        order::where('id', $orderId)
            ->update(['status'=>'Dikirim',
            'receipt_code'=>$validetedData['receipt_code']
        ]);
        return redirect('/admin/transaction');
    }
    public function finish($orderId){
        order::where('id', $orderId)
            ->where('user_id', auth()->user()->id)
            ->update(['status'=>'Selesai']);
        return redirect('/user/transaction');
    }

}
