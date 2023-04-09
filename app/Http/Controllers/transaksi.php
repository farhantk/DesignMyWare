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

        if (!$pesanan_detail->harga_nego) {
            return redirect()->back()->with('error', 'No price offer was submitted.');
        }
    
        $hargaBaru = $request->input('harga');
        $hargaLama = $pesanan_detail->harga;
    
        $negotiationStatus = $request->input('negotiation_status');
    
        switch ($negotiationStatus) {
            case '2': // Negotiation accepted
                $pesanan_detail->harga = $hargaBaru;
                $pesanan_detail->harga_nego = null;
                $pesanan_detail->negotiation_status = 2;
                break;
            case '-1': // Negotiation rejected
                $pesanan_detail->negotiation_status = -1;
                break;
            default:
                return redirect()->back()->with('error', 'Invalid negotiation status.');
        }
    
        $pesanan_detail->save();
    
        return redirect()->back()->with('success', 'Negotiation status updated successfully.');
    }
}
