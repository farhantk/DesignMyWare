<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function pesanan_details()
    {
        return $this->hasMany(PesananDetails::class,'product_id', 'id');
    }
}
