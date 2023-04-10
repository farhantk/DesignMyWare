<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\product;
use App\Models\PesananDetail;
use App\Models\Pesanan;


class UserAuth extends Controller
{
    public function view(){
        return view('User.landing_page');
    }
    public function view_SignIn(){
        return view('User.signin');
    }
    public function view_SignUp(){
        return view('User.signup');
    }
    public function SignIn(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);
        $user = User::where('email', $credentials['email'])->first();

        if (!$user || $user->isAdmin) {
            $request->session()->flash('danger', 'Email tdak terdaftar');
            return redirect('/signin');
        }
        if (!Hash::check($credentials['password'], $user->password)) {
            $request->session()->flash('danger', 'password salah');
            return redirect('/signin');
        }
        Auth::login($user);
        return redirect('/');
    }
    public function SignUp(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'confirm-password' => 'required|min:8|required_with:password|same:password'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        $request->session()->flash('success', 'Registration successfull, Please sign in');
        return redirect('/signin');
    }
    public function SignOut(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/signin');
    }

    public function product(Request $req,$id){
        $product = product::find($id);
        return view('User.detail_produk', ["product" => $product]);
    }

    public function order(Request $req, $id){
        $product = product::find($id);
        $pesanan = Pesanan::create([
            "kode_pesanan" => "MDW000001",
            "status" => "Pending",
            "user_id" => Auth::user()->id,
        ]);
        PesananDetail::create([
            "jumlah_pesanan" => $req->qty,
            "total_harga" => $req->totalPrice,
            "product_id" => $product->id,
            "pesanan_id" => $pesanan->id,
        ]);
        return redirect('/');
    }
}
