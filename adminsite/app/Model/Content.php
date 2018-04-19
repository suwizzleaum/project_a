<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'title',
        'image',
        'introduce',
        'content',
        'categories',
        'author_id',
        'publish',
        'sponser',
        'tag',
        'secure_meta',
        'status'
        // add all other fields
    ];
    //
    protected $table = 'content';
}
