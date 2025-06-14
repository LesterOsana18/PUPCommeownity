<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Adoption extends Model
{
    use HasFactory;

    protected $table = 'cats';

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
