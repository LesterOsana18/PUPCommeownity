<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'mobile_number',
        'donation_type',
        'donation_amount',
        'donation_proof',
        'donation_details',
        'message',
        'agreement',
    ];
}
