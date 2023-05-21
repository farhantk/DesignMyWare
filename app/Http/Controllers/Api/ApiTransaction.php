<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\order;
use App\Models\Pesanan;
use App\Models\PesananDetail;


class ApiTransaction extends Controller
{
    public function transaction(){

        //$detailPesanan = PesananDetail::with(['Pesanan'=>function($query){
        //    $query->with(['User'=>function($query){
        //        $query->where('id', auth()->user()->id);
        //    }]);
        //}])->get();
        
        //$orders = order::where('user_id', auth()->user()->id)->get();
        $orders = Order::where('user_id', auth()->user()->id)
        ->with('Pesanan.pesanan_details.Product', 'courier')
        ->get();
        return response()->json([
            //'detailPesanan' => $detailPesanan,
            'orders' => $orders
        ]);
    }
    public function track(Request $request){
        $courier = $request->input('courier');
        $receipt = $request->input('receipt_code');
        $api_key = '2dc5a1730c246c81eeca83daef396b1d7c2b2ac25676ad5a6a5f53f66e32063d';
        $url = 'https://api.binderbyte.com/v1/track?api_key='.$api_key.'&courier='.$courier.'&awb='.$receipt;
        $data = file_get_contents($url);
        $response = json_decode($data, true);
        
        return response()->json($response);
    }
    public function finish(Request $request)
    {
        $order = Order::where('id', $request->input('orderId'))
            ->where('user_id', auth()->user()->id)
            ->first();

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $order->status = 'Selesai';
        $order->save();

        return response()->json(['message' => 'Order successfully finished'], 200);
    }
}