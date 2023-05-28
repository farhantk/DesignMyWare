<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class ApiCheckout extends Controller
{
    public function checkout(Request $request)
    {
        $validatedData = $request->validate([
            'paymentreceipt' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'phone_number' =>'required',
            'name' => 'required',
            'province' => 'required|max:50|min:4',
            'city' => 'required|max:50|min:4',
            'subdistrict' => 'required|max:50|min:4',
            'ward' => 'required|max:50|min:4',
            'zip' => 'required|max:10|min:4',
            'street' => 'required|max:255|min:10',
            'courier' => 'required'
        ]);
        $validatedData['paymentreceipt'] = $request->file('paymentreceipt')->store('post-image');
        $pesanan = Pesanan::where('user_id', Auth::id())->first();
        // Hitung total harga
        $details_pesanan = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        $totalPrice = 0;
        foreach($details_pesanan as $detail){
            $totalPrice += $detail->product->price * $detail->jumlah_pesanan;
        }
        // Buat Table Order
        $newOrder = Order::create([
            'user_id'=> Auth::id(),
            'paymentreceipt'=> $validatedData['paymentreceipt'],
            'courier_id'=> $validatedData['courier'],
            'pesanan_id'=> $pesanan->id,
            'status'=> 'Menunggu konfirmasi',
        ]);
        // Memutus relasi pesanan lama dengan user
        Pesanan::where('user_id', Auth::id())->first()
                ->update([
                    'user_id' => null,
                    'order_id' =>  $newOrder->id,
                    'total_price' => $totalPrice
                ]);

        $validatedData['pesanan_id'] = $pesanan->id;
        $request->user()->update([
            'name' => $validatedData['name'],
            'phone_number' => $validatedData['hone_number'],
            'province' => $validatedData['province'],
            'city' => $validatedData['city'],
            'subdistrict' => $validatedData['subdistrict'],
            'ward' => $validatedData['ward'],
            'zip' => $validatedData['zip'],
            'street' => $validatedData['street'],
        ]);

        return response()->json(['message' => 'Success']);
    }
}