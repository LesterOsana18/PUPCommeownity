<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use App\Models\Event;

class VolunteerController extends Controller
{
    public function index($eventId)
    {
        $event = Event::findOrFail($eventId);
        $volunteers = $event->volunteers;
        return view('volunteers.index', compact('event', 'volunteers'));
    }

    public function store(Request $request, $eventId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Volunteer::create([
            'event_id' => $eventId,
            'name' => $request->name,
        ]);

        return redirect()->route('admin.events.volunteers.index', $eventId)->with('success', 'Volunteer added successfully!');
    }

    public function destroy($eventId, $volunteerId)
    {
        $volunteer = Volunteer::findOrFail($volunteerId);
        $volunteer->delete();

        return redirect()->route('admin.events.volunteers.index', $eventId)->with('success', 'Volunteer removed successfully!');
    }
}