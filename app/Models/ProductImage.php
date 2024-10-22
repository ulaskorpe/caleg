<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'product_images';
    protected $fillable = ['product_id','product_variant_id','image'];

    public function product(){
        return $this->hasOne(Products::class,'product_id');
    }

    public function product_variant(){
        return $this->belongsTo(ProductVariant::class ,'product_variant_id');
    }

}

