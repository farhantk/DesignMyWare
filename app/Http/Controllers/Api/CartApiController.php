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
        $userId = Auth::id();
        $pesanan = Pesanan::where('user_id', $userId)->where('status', 0)->get();
        $pesananDetails = [];

        if ($pesanan->isNotEmpty()) {
            foreach ($pesanan as $pesananItem) {
                $pesananDetails[$pesananItem->id] = PesananDetail::where('pesanan_id', $pesananItem->id)->get();
            }
        }

        $responseData = [
            'pesanan' => $pesanan,
            'pesanan_details' => $pesananDetails
        ];

        return response()->json([$responseData, 200]);
    }
}
