<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{
    use HasFactory;
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

    // Mutator for donation_type
    public function setDonationTypeAttribute($value)
    {
        $this->attributes['donation_type'] = ucfirst(strtolower($value));
    }
}
