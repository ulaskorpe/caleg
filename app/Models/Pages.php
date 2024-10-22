<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'content', 'status'];

    protected $table = 'pages';
    protected $casts = [
        'content' => 'array',
    ];

}
