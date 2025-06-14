<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Adoption;
use App\Models\AdoptionApplication;

class TablesController extends Controller
{
    public function index()
    {
        $donations = Donation::all();
        $applications = AdoptionApplication::all();
        $cats = \App\Models\Adoption::where('adopted', false)->where('deceased', false)->get(); // Available
        $previousCats = \App\Models\Adoption::where('adopted', true)->where('deceased', false)->get(); // Previously available (adopted)
        $deceasedCats = \App\Models\Adoption::where('deceased', true)->get(); // Legacy

        return view('tables', compact('donations', 'applications', 'cats', 'previousCats', 'deceasedCats')); // Add 'adoptions' here after creating the Adoption model
    }
}
