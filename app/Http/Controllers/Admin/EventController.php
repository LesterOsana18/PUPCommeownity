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
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|string',
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:5120',
            'target_volunteers' => 'nullable|integer',
        ]);

        Event::create($request->all());

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully!');
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
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:5120',
            'target_volunteers' => 'nullable|integer',
            'location' => 'nullable|string|max:255',
            'time' => 'nullable|string|max:255',
        ]);

        $event->name = $validated['name'];
        $event->status = $validated['status'];
        $event->description = $validated['description'] ?? $event->description;
        $event->target_volunteers = $validated['target_volunteers'] ?? $event->target_volunteers;
        $event->location = $validated['location'] ?? $event->location;
        $event->time = $validated['time'] ?? $event->time;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/events');
            $event->image_path = $path;
        }

        $event->save();

        return redirect()->route('admin.events.show', $event->id)->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully!');
    }
}