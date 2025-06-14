<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'suffix',
        'email',
        'mobile_number',
        'profile_picture',
        'address',
        'password',
        'preferred_volunteer_role',
        'availability',
        'motivation_statement',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function pawedUpdates()
    {
        return $this->belongsToMany(Update::class, 'paws')->withTimestamps();
    }

    public function getPreferredVolunteerRoleLabelAttribute()
    {
        $labels = [
            'event_coordinator' => 'Event Coordinator',
            'foster_caregiver' => 'Foster Caregiver',
            'adoption_counselor' => 'Adoption Counselor',
            'site_administrator' => 'Site Administrator'
        ];
        return $labels[$this->preferred_volunteer_role] ?? ucfirst(str_replace('_', ' ', $this->preferred_volunteer_role));
    }

}
