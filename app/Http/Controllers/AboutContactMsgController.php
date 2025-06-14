<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AboutContactMsg;

class AboutContactMsgController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        AboutContactMsg::create($validated);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function index()
    {
        $messages = AboutContactMsg::latest()->get();
        return view('admin.moderation-contact-messages', compact('messages'));
    }
}
