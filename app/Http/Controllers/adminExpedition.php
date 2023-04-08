<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\expedition;

class adminExpedition extends Controller
{
    public function index(){
        $expeditions = expedition::all();
        return view('Admin.Expedition.index', compact('expeditions'));
    }
    public function delete($id){
        $expeditions = expedition::findOrFail($id);
        $expeditions->delete();
        return redirect('/admin/expedition');
    }
    public function create(Request $request){
        $validatedData = $request->validate([
            'name' => ['required', 'max:24', 'unique:expeditions', 'min:3']
        ]);
        expedition::create($validatedData);
        return redirect('/admin/expedition');
    }
    public function edit(Request $request, $id){
        $validatedData = $request->validate([
            'name' => ['required', 'max:24', 'unique:expeditions', 'min:3']
        ]);
        expedition::where('id', $id)
                  ->update($validatedData);
        return redirect('/admin/expedition');
    }
}
