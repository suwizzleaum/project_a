<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category_index extends Model
{

    protected $fillable = [
        'category_name',
        'status'
        // add all other fields
    ];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category_index';
}