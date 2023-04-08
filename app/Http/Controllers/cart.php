<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\PesananDetail;


class Cart extends Controller
{
    protected $pesanan;
    protected $pesanan_details = [];
    public function view_keranjang()
    {
        if (Auth::user()){
            $this->pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->get();
            if($this->pesanan->isNotEmpty()){
                foreach($this->pesanan as $pesanan){
                    $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
                    $this->pesanan_details[$pesanan->id] = $pesanan_details;

                }
            }
        }

        return view('user.keranjang',[
            'pesanan' => $this->pesanan,
            'pesanan_details' => $this->pesanan_details
        ]);
        
    }

}
