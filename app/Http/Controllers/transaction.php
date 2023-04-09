<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\expedition;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\product;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class transaction extends Controller
{
    public function view_checkout(){
        $expeditions = expedition::all();
        $user = auth()->user();
        return view('User.Checkout.index', compact('expeditions', 'user'));
    }
    public function checkout(Request $request, $cart_id){
        $validatedData = $request->validate([
            'paymenreceipt' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|max:255|min:4',
            'phone_number' => 'required|max:14|min:4',
            'province' => 'required|max:50|min:4',
            'city' => 'required|max:50|min:4',
            'subdistrict' => 'required|max:50|min:4',
            'ward' => 'required|max:50|min:4',
            'zip' => 'required|max:10|min:4',
            'street' => 'required|max:255|min:10',
            'courier' => 'required',
        ]);
        $validatedData['paymenreceipt'] = $request->file('paymenreceipt')->store('post-image');
        $pesanan = Pesanan::where('id', $cart_id)->get();
        User::where('id',auth()->user()->id)
            ->update($validatedData);
        order::create([
            'user_id'=> auth()->user()->id,
            'expedition'=> $validatedData['expedition'],
            'paymenreceipt'=> $validatedData['paymenreceipt'],
            'courier_id'=> $validatedData['courier'],
            'cart_id'=> $cart_id,
            'status'=> 'Menunggu konfirmasi',
        ]);

        return redirect('user/cart');
    }
    public function index(){
        //$transactions = order::where('user_id', auth()->user()->id)->get();
        $detailPesanan = PesananDetail::with(['Pesanan'=>function($query){
            $query->with(['User'=>function($query){
                $query->where('id', auth()->user()->id);
            }]);
        }])->get();
        //Pesanan::with(['User'=>function($query){
        //    $query->where('id', auth()->user()->id);
        //}])->get();
        $api_key = '2dc5a1730c246c81eeca83daef396b1d7c2b2ac25676ad5a6a5f53f66e32063d';
        //$res = Http::get('https://api.binderbyte.com/v1/track?api_key='.$api_key.'&courier='.$courir.'&awb='.$receipt_code);
        //$track = json_decode($res, true);
        //dd($track);
        return view('User.Transaction.index',compact('detailPesanan', 'api_key'));
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