<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;

class AdoptionController extends Controller
{
    // Display a listing of available cats for adoption
    public function index()
    {
        $cats = Cat::where('sterilized', true)->get(); // can be adjusted, temp
        return view('adoptions.index', compact('cats'));
    }

    // Show the details of a specific cat
    public function show($id)
    {
        $cat = Cat::findOrFail($id);
        return view('adoptions.show', compact('cat'));
    }

    // Handle the adoption request
    public function adopt(Request $request, $id)
    {
        $request->validate([
            'adopter_name' => 'required|string|max:255',
            'adopter_contact' => 'required|string|max:255',
        ]);

        $cat = Cat::findOrFail($id);

        $adoption = new Adoption();
        $adoption->cat_id = $cat->id;
        $adoption->adopter_name = $request->adopter_name;
        $adoption->adopter_contact = $request->adopter_contact;
        $adoption->adopted_at = now();
        $adoption->save();

        // Optionally mark the cat as adopted
        $cat->update(['adopted' => true]);

        return redirect()->route('adoptions.index')->with('success', 'Cat adopted successfully!');
    }
}