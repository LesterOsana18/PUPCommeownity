<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'title',
        'author',
        'image_path',
        'excerpt',
        'content',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
