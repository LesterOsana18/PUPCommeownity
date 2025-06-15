<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdoptionApplication extends Model
{
    use HasFactory;

    protected $table = 'adoption_applications';

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone',
        'email',
        'birth_date',
        'occupation',
        'company_business_name',
        'social_media_profile',
        'civil_status',
        'sex',
        'adoption_prompt',
        'adopted_before',
        'co_signer_name',
        'co_signer_relationship',
        'co_signer_signature',
    ];

    //auto-cast birth_date as Carbon object
    protected $casts = [
        'birth_date' => 'date',
    ];
}