<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'thumbnail', 'content', 'published_at', 'status'
    ];

    protected $dates = ['published_at'];
}
