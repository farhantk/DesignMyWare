<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transaksi extends Controller
{
    public function view_transaksi(){
        return view('Admin.transaksi.lihattransaksi');
    }

}
