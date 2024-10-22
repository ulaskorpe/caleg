<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sizes extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'price'];

    protected $table = 'sizes';


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_size');
    }
}
