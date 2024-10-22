<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory,SoftDeletes;

    protected $table  = 'comments';
    protected $fillable = ['name','title','comment','rating','product_id','status'];


    public function product(){
        return  $this->hasOne(Products::class,'id');
    }
}
