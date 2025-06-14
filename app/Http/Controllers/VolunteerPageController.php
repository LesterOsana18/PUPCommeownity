<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class VolunteerPageController extends Controller
{
    public function index()
    {
        $currentEvents = Event::where('status', 'CURRENT')
            ->whereDate('date', '>=', now()->toDateString())
            ->orderBy('date')
            ->get()
            ->map(function($event) {
                return [
                    'id' => $event->id,
                    'title' => $event->name,
                    'description' => $event->description,
                    'date' => $event->date,
                    'time' => ($event->time_start && $event->time_end)
                        ? \Carbon\Carbon::parse($event->time_start)->format('g:i A') . ' - ' . \Carbon\Carbon::parse($event->time_end)->format('g:i A')
                        : '',
                    'location' => $event->location,
                    'image' => asset('storage/' . $event->image_path),
                    'current' => $event->current_volunteers,
                    'target' => $event->target_volunteers,
                ];
            })
            ->values(); 

        $pastEvents = Event::where(function ($query) {
                $query->where('status', 'PAST')
                    ->orWhere('date', '<', now()->toDateString());
            })
            ->orderByDesc('date')
            ->get()
            ->map(function($event) {
                return [
                    'id' => $event->id,
                    'title' => $event->name,
                    'description' => $event->description,
                    'date' => $event->date,
                    'location' => $event->location,
                    'image' => asset('storage/' . $event->image_path),
                ];
            })
            ->values();

        $user = Auth::user();

        return view('volunteer', compact('currentEvents', 'pastEvents', 'user'));
    }
}