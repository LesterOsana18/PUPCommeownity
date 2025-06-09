<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModerationController extends Controller
{
    /**
     * Show the moderation dashboard.
     */
    public function index()
    {
        return view('moderation');
    }
}
