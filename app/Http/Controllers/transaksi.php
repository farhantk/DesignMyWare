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
        PesananDetail::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Pesanan detail berhasil dihapus.');
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

        if (!$pesanan_detail->harga_nego) {
            return redirect()->back()->with('error', 'No price offer was submitted.');
        }

        $negotiationStatus = $request->input('negotiation_status');

        switch ($negotiationStatus) {
            case '1': // Negotiation accepted
                $pesanan_detail->harga_nego = $pesanan_detail->harga;
                $pesanan_detail->harga = null;
                $pesanan_detail->status_nego = 'Accept';
                break;
            case '0': // Negotiation rejected
                $pesanan_detail->harga_nego = $pesanan_detail->jumlah_pesanan * $pesanan_detail->harga;
                $pesanan_detail->harga = null;
                $pesanan_detail->status_nego = 'Reject';
                break;
            default:
                return redirect()->back()->with('error', 'Invalid negotiation status.');
        }

       
        $pesanan_detail->save();

        return redirect()->back()->with('success', 'Negotiation status updated successfully.');
    }

    
}
