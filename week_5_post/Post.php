<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $table = "posts";
    protected $fillable = [
        'id', 'title', 'content','likes',
    ];
}
