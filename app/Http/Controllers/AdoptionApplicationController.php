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

    protected function validationRules($age = null)
    {
        $rules = [
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
            'adopted_before' => 'required|in:yes,no'
        ];

        if ($age !== null && $age < 18) {
            $rules['co_signer_name'] = 'required|string|max:255';
            $rules['co_signer_relationship'] = 'required|string|in:parent,guardian';
            $rules['co_signer_signature'] = 'required|image|mimes:jpg,jpeg,png|max:4096';
        }
        return $rules;
    }

    public function store(Request $request)
    {
        $birthDate = $request->input('birth_date');
        $age = Carbon::parse($birthDate)->age;

        $rules = $this->validationRules($age);
        $validated = $request->validate($rules);

        if (isset($validated['adoption_prompt'])) {
            $validated['adoption_prompt'] = implode(',', $validated['adoption_prompt']);
        }

        if ($age < 18 && $request->hasFile('co_signer_signature')) {
            $file = $request->file('co_signer_signature');
            $path = $file->store('signatures', 'public');
            $validated['co_signer_signature'] = $path;
        } else {
            unset($validated['co_signer_signature']);
        }

        AdoptionApplication::create($validated);

        return redirect('/')->with('success', 'Application submitted successfully!');
    }

    public function edit($id)
    {
        $application = AdoptionApplication::findOrFail($id);
        return view('Components.admin.update-application', compact('application'));
    }

    public function update(Request $request, $id)
    {
        $application = AdoptionApplication::findOrFail($id);

        $birthDate = $request->input('birth_date');
        $age = Carbon::parse($birthDate)->age;

        $rules = $this->validationRules($age);

        // Remove co-signer rules if not a minor
        if ($age >= 18) {
            unset($rules['co_signer_name'], $rules['co_signer_relationship'], $rules['co_signer_signature']);
        } else {
            if ($application->co_signer_signature) {
                $rules['co_signer_signature'] = 'nullable|image|mimes:jpg,jpeg,png|max:4096';
            } else {
                $rules['co_signer_signature'] = 'required|image|mimes:jpg,jpeg,png|max:4096';
            }
        }

        $validated = $request->validate($rules);

        if (isset($validated['adoption_prompt'])) {
            $validated['adoption_prompt'] = implode(',', $validated['adoption_prompt']);
        }

        // Handle co-signer signature upload
        if ($age < 18 && $request->hasFile('co_signer_signature')) {
            if ($application->co_signer_signature) {
                \Storage::disk('public')->delete($application->co_signer_signature);
            }
            $file = $request->file('co_signer_signature');
            $path = $file->store('signatures', 'public');
            $validated['co_signer_signature'] = $path;
        }

        // If not a minor, clear all co-signer fields and remove old file
        if ($age >= 18) {
            $validated['co_signer_name'] = null;
            $validated['co_signer_relationship'] = null;
            if ($application->co_signer_signature) {
                \Storage::disk('public')->delete($application->co_signer_signature);
            }
            $validated['co_signer_signature'] = null;
        }

        $application->update($validated);

        return redirect()->route('tables')->with('success', 'Application updated successfully!');
    }

    public function destroy($id)
    {
        $application = AdoptionApplication::findOrFail($id);
        if ($application->co_signer_signature) {
            \Storage::disk('public')->delete($application->co_signer_signature);
        }
        $application->delete();
        return redirect()->route('tables')->with('success', 'Application deleted successfully!');
    }
}