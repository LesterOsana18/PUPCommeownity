<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile_number' => 'required|string|max:20',
            'donation_type' => 'required|string',
            'donation_amount' => 'nullable|numeric|min:1',
            'donation_proof' => 'nullable|image|max:4096',
            'donation_details' => 'required|string|max:255',
            'message' => 'nullable|string',
            'agreement' => 'required|accepted',
        ]);

        // Handle file upload
        if ($request->hasFile('donation_proof')) {
            $path = $request->file('donation_proof')->store('donation_proofs', 'public');
            $validated['donation_proof'] = $path;
        }

        // Convert agreement to boolean
        $validated['agreement'] = $request->has('agreement');

        Donation::create($validated);

        return redirect()->back()->with('success', 'Thank you for your donation!');
    }
}
