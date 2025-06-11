<?php

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Update;

class HomeController extends Controller
{
    public function index()
    {
        $announcements = Announcement::where('is_active', true)
            ->latest()
            ->take(5)
            ->get();

        $updates = Update::where('is_approved', true)
            ->latest()
            ->paginate(6);

        return view('home', compact('announcements', 'updates'));
    }
}
