<?php

namespace App\Models\WP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';

    protected $table = 'wp_postmeta';

}
