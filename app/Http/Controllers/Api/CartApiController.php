<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\PesananDetail;

class CartApiController extends Controller
{
    public function getCart()
    {
        $user = auth()->user();
        if ($user) {
            $pesanan = Pesanan::where('user_id', $user->id)->where('status', 0)->get();
            $pesanan_details = [];
            foreach ($pesanan as $pesanan) {
                $details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
                if (!$details->isEmpty()) {
<<<<<<< HEAD
                    foreach ($details as $pesanan_detail) {
                        $item = [
                            'no' => $no++,
                            'id' => $pesanan->id,
                            'product_name' => $pesanan_detail->product->name,
                            'jumlah_pesanan' => $pesanan_detail->jumlah_pesanan,
                            'product_price' => $pesanan_detail->product->price,
                            'subtotal' => $pesanan_detail->jumlah_pesanan * $pesanan_detail->product->price,
                            'status_nego' => $pesanan_detail->status_nego,
                            'harga_nego' => $pesanan_detail->harga,
                        ];

                        if ($pesanan_detail->status_nego == 'Negosiasi' || $pesanan_detail->status_nego == 'Accept' || $pesanan_detail->status_nego == 'Reject') {
                            $item['harga_nego'] = $pesanan_detail->harga_nego;
                        } else {
                            $item['harga_nego'] = $pesanan_detail->jumlah_pesanan * $pesanan_detail->product->price;
                        }
                        
                        $pesanan_details[] = $item;
                        $total_harga += $item['harga_nego'];
                    }
=======
                    $pesanan_details[$pesanan->id] = $details;
>>>>>>> 656b8b938db9a6d5e2a9f10f6d95113ea260b2ad
                }
            }

            return response()->json([
                'message' => 'Success',
                'pesanan' => $pesanan,
                'pesanan_details' => $pesanan_details
            ]);
        } else {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }
    }

    public function negotiation(Request $request, $id)
    {
        $pesanan_detail = PesananDetail::findOrFail($id);
        $hargaBaru = $request->input('harga');
        $hargaLama = $pesanan_detail->harga;
        
        if ($hargaBaru != $hargaLama) {
            $pesanan_detail->harga = $hargaBaru;
            $pesanan_detail->status_nego = 'Negotiation';
            $pesanan_detail->save();

            return response()->json([
                'message' => 'Negotiation successful. Please wait for admin confirmation.',
                'pesanan_detail' => $pesanan_detail,
            ]);
        } else {
            return response()->json([
                'message' => 'Negotiation price must be different from the previous price.',
            ], 422);
        }
    }

    public function deleteCartDetail(Request $request, $id)
    {
        $pesanan_detail = PesananDetail::findOrFail($id);
        $pesanan_detail->delete();

        return response()->json([
            'message' => 'Cart detail deleted',
        ]);
    }
}
