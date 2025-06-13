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
        // $adoptions = Adoption::all();
        $applications = AdoptionApplication::all();

        return view('tables', compact('donations', 'applications')); // Add 'adoptions' here after creating the Adoption model
    }
}
