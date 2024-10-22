<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Products extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $fillable = ['slug', 'name', 'title', 'description', 'thumbnail', 'photo', 'category_id', 'type_id', 'price', 'status', 'views', 'language_id','location','order'];

    protected $table = 'products';
    protected $casts = [
        'types' => 'array',
    ];

    // public function Categories(): BelongsToMany
    // {
    //     return $this->belongsToMany(Category::class, 'category', 'id', 'category_id');
    // }


    public function images(){
        return $this->hasMany(ProductImage::class,'product_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'product_id');
    }
    public function variants(){
        return $this->hasMany(ProductVariant::class,'product_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'products_id', 'category_id');
    }

    public function types()
    {
        return $this->belongsToMany(Types::class, 'product_types', 'products_id', 'types_id');
    }
}
