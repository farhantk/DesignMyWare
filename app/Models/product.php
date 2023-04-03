<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'price',
        'variant_id',
    ];
    public function order(){
        return $this->hasMany(order::class);
    }
    public function variant(){
        return $this->belongsTo(variant::class);
    }
}
