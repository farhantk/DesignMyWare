<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\PesananDetail;

class transaksi extends Controller
{
    protected $pesanan;
    protected $pesanan_details = [];
    public function view_transaksi(){
        $this->pesanan = pesanan::where('status',0)->first();
        if ($this->pesanan)
            {
                $this->pesanan_details = pesanandetail::where('pesanan_id', $this->pesanan->id)->get();
            }
        return view('Admin.transaksi.index',[
            'pesanan' => $this->pesanan,
            'pesanan_details' => $this->pesanan_details
        ]);
    }

}
