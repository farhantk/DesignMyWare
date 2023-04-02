<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

        if (!$user) {
            $request->session()->flash('danger', 'emal tdak terdaftar');
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
}
