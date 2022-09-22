<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'series',
        'title',
        'type',
        'thumb',
        'description',
        'price',
        'sale_date'
    ];
}
