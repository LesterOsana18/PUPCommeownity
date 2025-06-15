<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'description',
        'location',
        'seen_at',
        'media',
        'observation',
        'recurring',
        'reporter_name',
        'reporter_email',
        'reporter_affiliation',
        'privacy',
        'is_resolved',
    ];
}
