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
            'seen_at' => 'required|date',
            'media' => 'nullable|file|mimes:jpg,jpeg,png,mp4|max:10240',
            'observation' => 'required|string|max:1000',
            'recurring' => 'required|in:yes,no',
            'reporter_name' => 'nullable|string|max:255',
            'reporter_email' => 'nullable|email|max:255',
            'reporter_affiliation' => 'required|in:student,faculty,staff,visitor',
            'privacy' => 'accepted',
        ]);

        // Handle file upload (if present)
        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('cat_reports', 'public');
            $validated['media'] = $path;
        }

        // Convert privacy to boolean
        $validated['privacy'] = $request->has('privacy');

        Report::create($validated);

        return redirect()->back()->with('success', 'Cat report submitted successfully!');
    }

    public function index()
    {
        $reports = Report::latest()->get();
        return view('Components.admin.moderation-reports', compact('reports'));
    }

    public function show($id)
    {
        $report = \App\Models\Report::findOrFail($id);
        return view('admin-report', compact('report'));
    }

    public function toggleStatus($id)
    {
        $report = Report::findOrFail($id);
        $report->status = $report->status === 'open' ? 'closed' : 'open';
        $report->save();

        return response()->json(['new_status' => $report->status]);
    }
}
