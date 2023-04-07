<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Pesanan;
use App\PesananDetail;


class cart extends Controller
{
    protected $Pesanan;
    protected $Pesanan_details = [];
    public function view_keranjang()
    {
        // if(Auth::user){
        //     this->Pesanan = Pesanan::where('user_id', Auth::userAuth()->id)->first();
        //     if($this->pesanan){
        //         $this-> pesanan_details = PesananDetail::where('pesanan_id',$this->pesanan->id)->get();
        //     }
        // }
        
        if (Auth::user()){
            $this->Pesanan = pesanan::where('id', Auth:user()->id)->where('status',0)->first();
            if ($this->Pesanan)
            {
                $this->Pesanan_details = pesanandetail::where('pesanan_id', $this->pesanan->id)->get();
            }
        }

        return view('user.keranjang',[
            'pesanan' => $this->pesanan,
            'pesanan_details' => $this->pesanan_details
        ]);
        
    }

}
