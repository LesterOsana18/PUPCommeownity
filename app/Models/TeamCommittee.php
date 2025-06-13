<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamCommittee extends Model
{
    protected $fillable = [
        'office',
        'email',
        'person_in_charge',
        'role',
    ];
}
