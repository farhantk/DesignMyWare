<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userDashboard extends Controller
{
    public function index(){
        return view('User.Dashboard.dashboard');
    }

    public function edit(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'photo' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'phone_number' => 'max:14',
            'province' => 'max:50',
            'city' => 'max:50',
            'subdistrict' => 'max:50',
            'ward' => 'max:50',
            'zip' => 'max:10',
            'street' => 'max:255',
        ]);
        if($request->file('photo')){
            $validatedData['photo'] = $request->file('photo')->store('post-image');
        }
        User::where('id',auth()->user()->id)
            ->update($validatedData);

        return redirect('/user/profile')->with('success', 'Data diri berhasil diubah');
    }
}
