<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(10);
        return view('components.admin.update-events', compact('events'));
    }

    public function create()
    {
        return view('components.admin.update-event-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|string',
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'time_start' => 'required|date_format:H:i',
            'time_end' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'image_path' => 'required|image|mimes:jpg,jpeg,png|max:5120',
            'target_volunteers' => 'required|integer',
        ]);

        $path = $request->file('image_path')->store('public/events');

        Event::create([
            'status' => $request->status,
            'name' => $request->name,
            'date' => $request->date,
            'time_start' => $request->time_start,
            'time_end' => $request->time_end,
            'location' => $request->location,
            'description' => $request->description,
            'target_volunteers' => $request->target_volunteers,
            'current_volunteers' => 0,
            'image_path' => $path,
        ]);

        return redirect('/update')->with('success', 'Event created successfully!');
    }


    public function show($id)
    {
        $event = Event::findOrFail($id);

        $event->current_volunteers = $event->volunteers()->count();
        $event->save();

        return view('components.admin.update-event-read', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|string|in:CURRENT,PAST',
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'target_volunteers' => 'nullable|integer',
            'location' => 'nullable|string|max:255',
            'time_start' => 'nullable|date_format:H:i',
            'time_end' => 'nullable|date_format:H:i',
        ]);

        $event->name = $validated['name'];
        $event->status = $validated['status'];
        $event->date = $validated['date'];
        $event->description = $validated['description'] ?? $event->description;
        $event->target_volunteers = $validated['target_volunteers'] ?? $event->target_volunteers;
        $event->location = $validated['location'] ?? $event->location;
        $event->time_start = $validated['time_start'] ?? $event->time_start;
        $event->time_end = $validated['time_end'] ?? $event->time_end;

        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('public/events');
            $event->image_path = $path;
        }

        $event->save();

        return redirect('/update')->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully!');
    }
}