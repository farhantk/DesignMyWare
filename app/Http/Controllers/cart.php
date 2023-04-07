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
            $this->pesanan = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
            if ($this->pesanan)
            {
                $this->pesanan_details = pesanandetail::where('pesanan_id', $this->pesanan->id)->get();
            }
        }

        return view('user.keranjang',[
            'pesanan' => $this->pesanan,
            'pesanan_details' => $this->pesanan_details
        ]);
        
    }

}
