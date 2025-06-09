<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarouselItem extends Model
{
    protected $fillable = [
        'title',
        'author',
        'image_path',
        'excerpt',
        'content',
    ];
}
