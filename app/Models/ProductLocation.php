<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLocation extends Model
{
    use HasFactory;

    protected $table = 'product_location';
    protected $fillable = ['product_id','location_id','rank'];


    public function product(){
        return $this->hasOne(Products::class,'product_id');
    }

    public function location(){
        return $this->hasOne(Location::class,'location_id');
    }
}
