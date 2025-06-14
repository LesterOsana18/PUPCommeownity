<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
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
        'adopted',
        'additional_remarks',
        'deceased',
        'date_of_death',
    ];
}
