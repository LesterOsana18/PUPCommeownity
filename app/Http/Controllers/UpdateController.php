<?php

namespace App\Http\Controllers;

use App\Models\Update;
use App\Models\Event;
use App\Models\Resource;
use App\Models\TeamCommittee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function index()
    {
        $updates = Update::where('is_approved', true)->latest()->paginate(6);
        $events = Event::latest()->paginate(6);
        $resources = Resource::latest()->get();
        $committees = TeamCommittee::all();

        // return view('update', compact('updates', 'events'));
        return view('update', compact('updates', 'events', 'resources', 'committees'));
    }

    public function show(Update $post)
    {
        return view('updates.show', ['update' => $post]);
    }

    public function destroyResource($id)
    {
        $resource = Resource::findOrFail($id);
        $resource->delete();

        return redirect()->back()->with('success', 'Resource deleted successfully.');
    }

    public function destroy(Update $post)
    {
        // Ensure only the owner can delete their post
        if (auth()->id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $post->delete();

        return redirect()->back()->with('message', 'Post deleted successfully.');
    }

    public function edit(Update $post)
    {
        if (auth()->id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        return view('livewire.edit-update-page', compact('post'));
    }

    public function update(Request $request, Update $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->is_approved = false; // Re-require moderation after update

        // Handle image update
        if ($request->has('remove_image')) {
            // Revert to default
            if ($post->image_path && $post->image_path !== 'images/def-img.svg') {
                Storage::disk('public')->delete($post->image_path); // delete old image
            }
            $post->image_path = 'images/def-img.svg';
        } elseif ($request->hasFile('image')) {
            // Delete old image if stored
            if ($post->image_path && !Str::startsWith($post->image_path, 'http') && $post->image_path !== 'images/def-img.svg') {
                Storage::disk('public')->delete($post->image_path);
            }

            $path = $request->file('image')->store('updates', 'public');
            $post->image_path = $path;
        }

        $post->save();

        return redirect()->route('home')->with('message', 'Your post has been updated and will be re-reviewed by the team.');
    }

}
