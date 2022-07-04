<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $comic = 'comics';
    protected $fillable = [
        'title',
        'thumb',
        'description',
        'type',
        'price',
        'series',
        'sale_date'

    ];
}
