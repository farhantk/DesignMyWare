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

    public function negosiasi($id, Request $request){
        $pesanan_detail = PesananDetail::find($id);        
        $hargaBaru = $request->input('harga');
        $hargaLama = $pesanan_detail->harga;
        // Jika harga negosiasi yang baru tidak sama dengan harga yang lama
        if ($hargaBaru != $hargaLama) {
            // Update harga negosiasi
            $pesanan_detail->harga = $hargaBaru;
            $pesanan_detail->status_nego = 'Negosiasi'; // Menandai status negosiasi
            $pesanan_detail->save();
            return redirect()->back()->with('success', 'Harga berhasil dinegosiasi. Silakan tunggu konfirmasi dari admin.');
        } else {
            return redirect()->back()->with('error', 'Harga negosiasi tidak boleh sama dengan harga sebelumnya.');
        }
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::find($id);
        $pesanan_detail->delete();
        return redirect()->back()->with('success', 'Pesanan berhasil dihapus.');
    }

}
