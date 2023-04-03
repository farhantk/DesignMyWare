<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'receipt_code',
    ];
    public function product(){
        return $this->hasMany(product::class);
    }
    public function User(){
        return $this->hasMany(User::class);
    }
}
