<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    protected $fillable = [
        'name',
        'breed',
        'sex',
        'age',
        'color',
        'weight',
        'sterilized',
        'location',
        'photo_path',
    ];
}
