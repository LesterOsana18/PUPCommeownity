<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdoptionApplication;

class AdoptionApplicationController extends Controller
{
    // Show the application form
    public function create()
    {
        return view('application'); // Render the application form view
    }

    // Store the submitted application form data
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'birth_date' => 'required|date',
            'company_business_name' => 'required|string',
            'civil_status' => 'required|in:single,married,other',
            'sex' => 'required|in:male,female,other',
            'adopted_before' => 'required|in:yes,no',
            'alt_first_name' => 'required|string',
            'alt_last_name' => 'required|string',
            'relationship_to_alt' => 'required|string',
            'phone_alt' => 'required|string',
            'email_alt' => 'required|email',
        ]);

        // Create a new adoption application record
        AdoptionApplication::create($request->all());

        // Redirect or return response
        return redirect()->route('home')->with('success', 'Application submitted successfully!');
    }
}
