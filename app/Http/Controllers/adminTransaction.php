<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class adminTransaction extends Controller
{
    public function index(){
        $orders = order::all();
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
            ->update(['status'=>'Dikrim',
                      'receipt_code'=>$validetedData['receipt_code']
        ]);
        return redirect('/admin/transaction');
    }

}
