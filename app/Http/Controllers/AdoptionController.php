<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;
use Illuminate\Support\Facades\Storage;

class AdoptionController extends Controller
{

    public function gallery()
    {
        $cats = \App\Models\Adoption::all();
        return view('adopt', compact('cats'));
    }

    public function adopt()
    {
        $cats = \App\Models\Adoption::where('adopted', false)->where('deceased', false)->get(); // available
        $previousCats = \App\Models\Adoption::where('adopted', true)->where('deceased', false)->get(); // previous/adopted
        $deceasedCats = \App\Models\Adoption::where('deceased', true)->get(); // legacy/deceased

        return view('adopt', compact('cats', 'previousCats', 'deceasedCats'));
    }

    public function create()
    {
        return view('create-adoption');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'breed'       => 'required|string|max:255',
            'sex'         => 'required|in:male,female',
            'age'         => 'required|integer|min:0',
            'color'       => 'required|in:black,white,brown,orange,gray,other',
            'weight'      => 'required|numeric|min:0',
            'sterilized'  => 'nullable|boolean',
            'location'    => 'required|string|max:255',
            'photo_path'  => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:2048',
            'adopted'     => 'nullable|boolean',
            'additional_remarks' => 'nullable|string',
            'deceased' => 'required|boolean',
            'date_of_death' => 'nullable|date'
        ]);

        // Only require 'sterilized' and 'adopted' if the cat is NOT deceased
        if (!$request->input('deceased')) {
            $rules['sterilized'] = 'required|boolean';
            $rules['adopted'] = 'required|boolean';
        } else {
            // If deceased, you might want to allow these to be nullable instead
            $rules['sterilized'] = 'nullable|boolean';
            $rules['adopted'] = 'nullable|boolean';
        }

        // Handle image upload here
        if ($request->hasFile('photo_path')) {
            $path = $request->file('photo_path')->store('cats', 'public');
            $validated['photo_path'] = $path; // e.g. cats/yourimage.jpg
        }

        Adoption::create($validated);

        return redirect('/tables')->with('success', 'Cat added to gallery!');
    }

    public function edit($id)
    {
        // Fetch the cat/adoption record by its ID
        $cat = Adoption::findOrFail($id);

        // Return the edit view with the cat data
        return view('Components.admin.update-adoption', compact('cat'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name'        => 'required|string|max:255',
            'breed'       => 'required|string|max:255',
            'sex'         => 'required|in:male,female',
            'age'         => 'required|integer|min:0',
            'color'       => 'required|in:black,white,brown,orange,gray,other',
            'weight'      => 'required|numeric|min:0',
            'sterilized'  => 'nullable|boolean',
            'location'    => 'required|string|max:255',
            'photo_path'  => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:2048',
            'adopted'     => 'nullable|boolean',
            'additional_remarks' => 'nullable|string',
            'deceased' => 'required|boolean',
            'date_of_death' => 'nullable|date'
        ];

        // Only require 'sterilized' and 'adopted' if the cat is NOT deceased
        if (!$request->input('deceased')) {
            $rules['sterilized'] = 'required|boolean';
            $rules['adopted'] = 'required|boolean';
        } else {
            $rules['sterilized'] = 'nullable|boolean';
            $rules['adopted'] = 'nullable|boolean';
        }

        $validated = $request->validate($rules);

        // Find the cat or adoption record
        $cat = \App\Models\Adoption::findOrFail($id);

        // Update the cat
        $cat->update($validated);

        // Redirect or return response as needed
        return redirect()->route('tables')->with('success', 'Cat details updated successfully!');
    }

    public function destroy($id)
    {
        // Find the adoption/cat by ID
        $cat = Adoption::findOrFail($id);

        //Delete associated image from storage
        if ($cat->photo_path) {
            \Storage::delete($cat->photo_path);
        }

        // Delete the record
        $cat->delete();

        // Redirect back to the tables page with a success message
        return redirect()->route('tables')->with('success', 'Cat record deleted successfully.');
    }
}
