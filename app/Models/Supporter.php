<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
    protected $table = 'supporters_donors';

    protected $fillable = ['name', 'initials', 'message'];
}
