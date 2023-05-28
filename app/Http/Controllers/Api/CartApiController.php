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
        if (Auth::user()){
            $this->pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->get();
            if($this->pesanan->isNotEmpty()){
                foreach($this->pesanan as $pesanan){
                    $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
                    $this->pesanan_details[$pesanan->id] = $pesanan_details;

                }
            }
        }

        return response()->json([
            'message' => 'Success',
            'pesanan' => $this->pesanan,
            'pesanan_details' => $this->pesanan_details
        ]);
    }
}
