<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use SoftDeletes;
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
