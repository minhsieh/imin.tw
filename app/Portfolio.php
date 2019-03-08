<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'main_img',
        'sort',
        'short_desc',
        'content'
    ];
}
