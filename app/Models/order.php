<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pesanan_id',
        'status',
        'courier_id',
        'receipt_code',
        'paymentreceipt'
    ];
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function courier(){
        return $this->belongsTo(expedition::class);
    }
    public function pesanan(){
        return $this->belongsTo(Pesanan::class);
    }
}
