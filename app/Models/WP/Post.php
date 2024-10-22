<?php

namespace App\Models\WP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    protected $table = 'wp_posts';

    protected $fillable = ['ID','post_author','post_date','post_date_gmt','post_content','post_title','post_excerpt','post_status','comment_status','ping_status','post_password','post_name','to_ping','pinged','post_parent','guid','menu_order','post_type','post_mime_type'];
}
