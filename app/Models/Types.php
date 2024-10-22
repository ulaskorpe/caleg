<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    protected $table = 'types';


    public function products()
    {
        return $this->belongsToMany(Products::class, 'product_types');
    }
}
