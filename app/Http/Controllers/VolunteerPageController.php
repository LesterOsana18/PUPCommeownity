<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VolunteerPageController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('volunteer', [
            'user' => $user,
        ]);
    }
}