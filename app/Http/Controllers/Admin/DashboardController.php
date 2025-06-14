<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Adoption;
use App\Models\Donation;
use App\Models\AdoptionApplication;

class DashboardController extends \App\Http\Controllers\Controller
{
    /**
     * Display the dashboard with stats and user table.
     */
    public function index()
    {
        $users = User::select('first_name', 'last_name', 'email', 'mobile_number', 'preferred_volunteer_role')->get();
        $totalUsers = $users->count();

        // Change these according to your actual model/field names!
        $totalAdoptions = Adoption::count();
        $totalDonations = Donation::sum('donation_amount'); // or whatever your amount column is
        $totalApplications = AdoptionApplication::count();

        return view('dashboard', [
            'users' => $users,
            'totalUsers' => $totalUsers,
            'totalAdoptions' => $totalAdoptions,
            'totalDonations' => $totalDonations,
            'totalApplications' => $totalApplications,
        ]);
    }
}
