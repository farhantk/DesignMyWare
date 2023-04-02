<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Foundation\Http\Kernel;

class AdminAuth extends Controller
{
    public function index(){
        return view('Admin.signin');
    }
    public function adminSignIn(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);
        $admin = User::where('email', $credentials['email'])->first();
        if (!$admin->isAdmin) {
            $request->session()->flash('danger', 'Anda tidak terdaftar sebagai admin');
            return redirect('/admin/signin');
        }
        if (!Hash::check($credentials['password'], $admin->password)) {
            $request->session()->flash('danger', 'password salah');
            return redirect('/admin/signin');
        }
        Auth::login($admin);
        return redirect('/admin');
    }
    public function adminSignOut(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin/signin');
    }
}
