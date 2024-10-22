<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class ProductVariant extends Model
{
    use HasFactory;


    protected $connection = 'mysql';
    protected $fillable = ['slug', 'name', 'title', 'description', 'thumbnail', 'photo', 'category_id', 'type_id', 'price', 'status', 'views', 'language_id','product_id'];

    protected $table = 'product_variants';
    protected $casts = [
        'types' => 'array',
    ];

    public function product()
    {
        return $this->belongsTo(Products::class,  'product_id');
    }

    public function images(){
        return $this->hasMany(ProductImage::class,'product_variant_id');
    }
}
