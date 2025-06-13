<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdoptionApplication;
use Carbon\Carbon;

class AdoptionApplicationController extends Controller
{
    // Show the application form
    public function create()
    {
        return view('application');
    }

    // Fetch all adoption applications and pass them to the tables view
    public function index()
    {
        $applications = AdoptionApplication::all();
        return view('table-application', compact('applications'));
    }

    // Store the submitted application form data
    public function store(Request $request)
    {
        // Validate common fields
        $baseRules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'birth_date' => 'required|date',
            'occupation' => 'nullable|string|max:255',
            'company_business_name' => 'required|string',
            'social_media_profile' => 'nullable|string|max:255',
            'civil_status' => 'required|in:single,married,other',
            'sex' => 'required|in:male,female,other',
            'adoption_prompt' => 'required|array',
            'adoption_prompt.*' => 'in:friends,social_media,website,posters,other',
            'adopted_before' => 'required|in:yes,no',
            'alt_first_name' => 'required|string',
            'alt_last_name' => 'required|string',
            'relationship_to_alt' => 'required|string',
            'phone_alt' => 'required|string',
            'email_alt' => 'required|email',
        ];

        // Calculate the age
        $birthDate = $request->input('birth_date');
        $age = Carbon::parse($birthDate)->age;

        // If minor, require co-signer fields and relationship_to_alt must be Parent/Guardian
        if ($age < 18) {
            $baseRules['co_signer_name'] = 'required|string|max:255';
            $baseRules['co_signer_relationship'] = 'required|string|in:Parent,Guardian';
            $baseRules['co_signer_signature'] = 'required|image|mimes:jpg,jpeg,png|max:4096'; // 4MB max
            $baseRules['relationship_to_alt'] = 'required|string|in:Parent,Guardian,Parent/Guardian';
        }

        $validated = $request->validate($baseRules);

        // Convert adoption_prompt to a string
        if (isset($validated['adoption_prompt'])) {
            $validated['adoption_prompt'] = implode(',', $validated['adoption_prompt']);
        }

        // dd($validated);

        // Handle file upload for co_signer_signature
        if ($age < 18 && $request->hasFile('co_signer_signature')) {
            $file = $request->file('co_signer_signature');
            $path = $file->store('signatures', 'public'); // stored in storage/app/public/signatures
            $validated['co_signer_signature'] = $path;
        } else {
            unset($validated['co_signer_signature']);
        }

        AdoptionApplication::create($validated);

        return redirect('/')->with('success', 'Application submitted successfully!');
    }

    public function destroy($id)
    {
        $application = AdoptionApplication::findOrFail($id);
        $application->delete();
        return redirect()->route('tables')->with('success', 'Application deleted successfully!');
    }
}
