<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name', 'brief', 'banner', 'sizes', 'status', 'meta_tag', 'meta_description', 'show_on_head_list', 'language_id'];

    protected $table = 'category';
    protected $casts = [
        'sizes' => 'array',
    ];

    public function Sizes()
    {
        //return Sizes::whereIn('id', $this->sizes)->get();
        return $this->belongsToMany(Sizes::class, 'category_size');
    }

    // public function Products(): HasMany
    // {
    //     return $this->hasMany(Products::class);
    // }

    public function products()
    {
        return $this->belongsToMany(Products::class, 'product_categories');
    }
}
