<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'name',
        'date',
        'time_start',
        'time_end',
        'location',
        'description',
        'target_volunteers',
        'current_volunteers',
        'image_path',
    ];

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }
}
