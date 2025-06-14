<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate();
        return view('components.admin.update-events', compact('events'));
    }

    public function create()
    {
        return view('components.admin.update-event-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
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

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $originalName = $image->getClientOriginalName();

            if (file_exists(public_path('images/'.$originalName))) {
                File::delete(public_path('images/'.$originalName));
            }

            $image->move(public_path('images'), $originalName);
            $validated['image_path'] = 'images/'.$originalName;
        }

        Event::create([
            'status' => $validated['status'],
            'name' => $validated['name'],
            'date' => $validated['date'],
            'time_start' => $validated['time_start'],
            'time_end' => $validated['time_end'],
            'location' => $validated['location'],
            'description' => $validated['description'],
            'target_volunteers' => $validated['target_volunteers'],
            'current_volunteers' => 0,
            'image_path' => $validated['image_path'],
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

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'status' => 'required|string',
            'target_volunteers' => 'nullable|integer',
            'date' => 'required|date',
            'location' => 'required|string',
            'time_start' => 'required',
            'time_end' => 'required',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        if ($request->hasFile('image_path')) {
            if ($event->image_path && file_exists(public_path($event->image_path))) {
                File::delete(public_path($event->image_path));
            }

            $image = $request->file('image_path');
            $originalName = $image->getClientOriginalName();

            if (file_exists(public_path('images/'.$originalName))) {
                File::delete(public_path('images/'.$originalName));
            }

            $image->move(public_path('images'), $originalName);
            $validated['image_path'] = 'images/'.$originalName;
        }

        $event->update($validated);

        return redirect('/update')->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->image_path && file_exists(public_path($event->image_path))) {
            File::delete(public_path($event->image_path));
        }

        $event->delete();

        return redirect('/update')->with('success', 'Event deleted successfully!');
    }
}