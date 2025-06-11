<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::latest()->paginate(10);

        return view('components.admin.update-announcements', compact('announcements'));
    }

    public function show(Announcement $announcement)
    {
        return view('components.admin.update-announcement-read', compact('announcement'));
    }

    public function create()
    {
        return view('components.admin.update-announcement-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image_path'] = $imagePath;
        }

        $validated['is_active'] = true;
        $validated['author'] = auth()->user()->first_name . ' ' . auth()->user()->last_name;
        $validated['excerpt'] = \Str::limit(strip_tags($validated['content']), 150);

        Announcement::create($validated);

        return redirect('/update')->with('success', 'Announcement created successfully.');
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        return redirect('/update')->with('success', 'Announcement deleted successfully.');
    }

    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:5120', // 5MB
        ]);

        $announcement->title = $request->title;
        $announcement->content = $request->content;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $announcement->image_path = $path;
        }

        $announcement->excerpt = \Str::limit(strip_tags($announcement->content), 150);
        $announcement->save();

        return redirect('/update')->with('success', 'Announcement updated successfully.');
    }
}
