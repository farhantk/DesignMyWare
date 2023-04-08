<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    protected $fillable = ['pesanan_id', 'product_id', 'jumlah', 'harga', 'harga_nego', 'status'];
    // use HasFactory;
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class,'pesanan_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(product::class,'product_id', 'id');
    }
}
