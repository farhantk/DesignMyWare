<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'status',
        'courier',
        'receipt_code',
        'paymentreceipt'
    ];
    public function product(){
        return $this->hasMany(product::class);
    }
    public function User(){
        return $this->hasMany(User::class);
    }
    public function courier(){
        return $this->belongsTo(expedition::class);
    }
}
