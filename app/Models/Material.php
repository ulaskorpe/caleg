<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use HasFactory,SoftDeletes;

    protected $table  = 'materials';
    protected $fillable = ['name','factor'];


    public function products()
    {
        return $this->belongsToMany(Products::class, 'product_material', 'material_id', 'product_id');
    }
}
