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
        $pesanan = Pesanan::where('user_id', auth()->user()->id)->first();
        $details_pesanan = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        $totalPrice = 0;
        $price = 0;
        foreach($details_pesanan as $detail){
            $price = $detail->product->price * $detail->jumlah_pesanan;
            $totalPrice = $totalPrice + $price;
        }
        return view('User.Checkout.index', compact('expeditions', 'user', 'details_pesanan', 'totalPrice'));
    }

    public function checkout(Request $request){
        
        $validatedData = $request->validate([
            'paymentreceipt' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'province' => 'required|max:50|min:4',
            'city' => 'required|max:50|min:4',
            'subdistrict' => 'required|max:50|min:4',
            'ward' => 'required|max:50|min:4',
            'zip' => 'required|max:10|min:4',
            'street' => 'required|max:255|min:10',
            'courier' => 'required'
        ]);
        $validatedData['paymentreceipt'] = $request->file('paymentreceipt')->store('post-image');
        $pesanan = Pesanan::where('user_id', auth()->user()->id)->first();
        // Hitung total harga
        $details_pesanan = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        $totalPrice = 0;
        $price = 0;
        foreach($details_pesanan as $detail){
            $price = $detail->product->price * $detail->jumlah_pesanan;
            $totalPrice = $totalPrice + $price;
        }
        // Buat Table order
        order::create([
            'user_id'=> auth()->user()->id,
            'pesanan_id'=> 1,
            'paymentreceipt'=> $validatedData['paymentreceipt'],
            'courier_id'=> $validatedData['courier'],
            'pesanan_id'=> $pesanan->id,
            'status'=> 'Menunggu konfirmasi',
            'status'=> 'Menunggu konfirmasi',
        ]);
        // Memutus relasi pesanan lama dengan user
        Pesanan::where('user_id', auth()->user()->id)->first()
                ->update([
                    'user_id' => null,
                    'total_price'=>$totalPrice
                ]);
        // membuat relasi pesanan baru dengan user
        $pesanan = Pesanan::create([
            'user_id'=>auth()->user()->id,
        ]);
        $validatedData['pesanan_id'] = $pesanan->id;
        User::where('id',auth()->user()->id)
            ->update([
                'province' => $validatedData['province'],
                'city' => $validatedData['city'],
                'subdistrict' => $validatedData['subdistrict'],
                'ward' => $validatedData['ward'],
                'zip' => $validatedData['zip'],
                'street' => $validatedData['street'],
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