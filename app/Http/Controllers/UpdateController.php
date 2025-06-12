<?php

namespace App\Http\Controllers;

use App\Models\Update;
use App\Models\Event;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index()
    {
        $updates = Update::where('is_approved', true)->latest()->paginate(6);
        $events = Event::latest()->paginate(6);

        return view('update', compact('updates', 'events'));
    }

    public function show(Update $post)
    {
        return view('updates.show', ['update' => $post]);
    }
}
