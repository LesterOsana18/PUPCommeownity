<?php

namespace App\Http\Controllers;

use App\Models\Update;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index()
    {
        $updates = Update::where('is_approved', true)->latest()->paginate(6);
        return view('updates.index', compact('updates'));
    }

    public function show(Update $post)
    {
        return view('updates.show', ['update' => $post]);
    }
}
