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

    public function setuju(Request $request, $id)
    {
       $pesanan_detail = PesananDetail::findOrFail($id);
  
        if ($request->input('harga')) {
            $pesanan_detail->harga = $pesanan_detail->harga_nego;
            $pesanan_detail->harga_nego = null;
            $pesanan_detail->status = 2; // Menandai status disetujui

            // Tambahk an validasi harga_nego sebelum disimpan
            if (!$pesanan_detail->harga_nego) {
                return redirect()->back()->with('error', 'Tidak ada tawaran harga yang diajukan.');
            }

            $pesanan_detail->save();

            return redirect()->back()->with('success', 'Harga berhasil disetujui. Silakan bayar harga yang disetujui.');
        } else {
            return redirect()->back()->with('error', 'Tidak ada tawaran harga yang diajukan.');
        }
    }

}
