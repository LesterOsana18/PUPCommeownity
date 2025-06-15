<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        // Get the current user
        $user = $request->user();
        return view('edit-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'mobile_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'availability' => 'nullable|string|max:255',
            'motivation_statement' => 'nullable|string',
            'profile_picture' => 'nullable|image|max:2048',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $validated['profile_picture'] = $path;
        } else {
            unset($validated['profile_picture']);
        }

        // Only update password if provided
        if (!empty($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }
}
