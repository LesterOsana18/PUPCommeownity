<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportCatController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:1000',
            'location' => 'required|string|max:255',
            'seen-at' => 'required|date',
            'media' => 'nullable|file|mimes:jpg,jpeg,png,mp4|max:10240',
            'observation' => 'required|string|max:1000',
            'recurring' => 'required|in:yes,no',
            'reporter-name' => 'nullable|string|max:255',
            'reporter-email' => 'nullable|email|max:255',
            'reporter-affiliation' => 'required|in:student,faculty,staff,visitor',
            'privacy' => 'accepted',
        ]);

        // Handle file upload (if present)
        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('cat_reports', 'public');
            $validated['media_path'] = $path;
        }

        // Convert privacy to boolean
        $validated['privacy'] = $request->has('privacy');

        Report::create($validated);

        return redirect()->back()->with('success', 'Cat report submitted successfully!');
    }
}
