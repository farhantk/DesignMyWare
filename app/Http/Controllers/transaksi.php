<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\PesananDetail;

class transaksi extends Controller
{
    protected $pesanans;
    protected $pesanan_details = [];

    public function destroy($id)
    {
        pesanandetail::where('pesanan_id',$id)->delete();
        pesanan::where('id',$id);
        return redirect('/admin/transaksi');
    }

    public function view_transaksi(){
        $pesanans = pesanan::where('status',0)->get();
        $pesanan_details = [];
        foreach ($pesanans as $pesanan){
            $details = pesanandetail::where('pesanan_id', $pesanan->id)->get();
            if(!$details->isEmpty()) {
                $pesanan_details[] = $details;
            }
        }

        return view('Admin.transaksi.index',[
            'pesanan' => $pesanans,
            'pesanan_details' => $pesanan_details
        ]);
    }

}
