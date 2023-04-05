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
        'courir',
        'receipt_code',
        'total_price',
        'expected_price'
    ];
    public function product(){
        return $this->hasMany(product::class);
    }
    public function User(){
        return $this->hasMany(User::class);
    }
}
