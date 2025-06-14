<?php

namespace App\Http\Controllers;

use App\Models\Update;
use App\Models\Event;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UpdateController extends Controller
{
    public function index()
    {
        $updates = Update::where('is_approved', true)->latest()->paginate(6);
        $events = Event::latest()->paginate(6);
        $resources = Resource::latest()->get();

        // return view('update', compact('updates', 'events'));
        return view('update', compact('updates', 'events', 'resources'));
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
}
