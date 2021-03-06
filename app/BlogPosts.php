<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{
    protected $table = 'blog_posts';

    protected $fillable = [
    	'post_title', 'post_description', 'image_name',
    ];
}
