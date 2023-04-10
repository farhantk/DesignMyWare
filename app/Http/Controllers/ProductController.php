<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        return view('Admin.product.index', ["products" => $products]);
    }

    public function add(){
        return view('Admin.product.add');
    }

    public function create(Request $req){
        product::create([
            "name" => $req->name,
            "variant_id" => $req->variant_id,
            "desc" => $req->desc,
            "price" => $req->price,
        ]);
        return redirect('/admin/product');
    }

    public function edit($id){
        $product = product::find($id);
        return view('Admin.product.edit', ['product' => $product]);
    }

    public function delete($id){
        $product = product::find($id);
        $product->delete();
        return redirect()->route('admin.product');
    }

    public function update(Request $req, $id){
        $p = product::find($id);
        $p->name = $req->name;
        $p->variant_id = $req->variant_id;
        $p->desc = $req->desc;
        $p->price = $req->price;
        $p->save();
        return redirect()->route('admin.product');
    }

}
