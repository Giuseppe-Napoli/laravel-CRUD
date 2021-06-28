<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasta extends Model
{
    //

    protected $fillable = [
        'title',
        'description',
        'cooking_time',
        'type',
        'weight',
        'slug',
        'image'
    ];
}
