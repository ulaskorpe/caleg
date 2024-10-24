<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
class Location extends Model
{
    use HasFactory;
    

    protected $table  = 'locations';
    protected $fillable = ['name','rank','show','has_products'];


    public function products()
    {
        return $this->belongsToMany(Products::class, 'product_location', 'location_id', 'product_id')
        ->withPivot('rank')
        ->orderBy('product_location.rank');
    }
}
