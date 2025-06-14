<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($event) {
            $event->determineStatus();
        });

        static::retrieved(function ($event) {
            $event->determineStatus();
            if ($event->isDirty('status')) {
                $event->saveQuietly();
            }
        });
    }

    public function determineStatus()
    {
        if (!$this->date) {
            return;
        }

        $eventDate = Carbon::parse($this->date);
        $today = Carbon::today();

        if ($this->time_end) {
            $eventDateTime = Carbon::parse($this->date.' '.$this->time_end);
            $newStatus = $eventDateTime->isPast() ? 'PAST' : 'CURRENT';
        } else {
            $newStatus = $eventDate->isPast() ? 'PAST' : 'CURRENT';
        }

        if ($this->status !== $newStatus) {
            $this->status = $newStatus;
        }
    }

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }
}