<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'user_id',
        'name',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    protected static function booted()
    {
        static::created(function ($volunteer) {
            $volunteer->event->current_volunteers = $volunteer->event->volunteers()->count();
            $volunteer->event->save();
        });

        static::deleted(function ($volunteer) {
            $volunteer->event->current_volunteers = $volunteer->event->volunteers()->count();
            $volunteer->event->save();
        });
    }
}