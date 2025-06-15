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

        // Randomized adoptions per month
        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $adoptionsPerMonth = [];
        foreach ($months as $month) {
            // You can adjust min/max as you like
            $adoptionsPerMonth[$month] = rand(1, 8);
        }

        // Make totalAdoptions the sum of the randomized values -- can be removed
        $totalAdoptions = array_sum($adoptionsPerMonth);

        // Calculate totals for donations and applications (real data)
        // $totalAdoptions = Adoption::count();
        $totalDonations = Donation::sum('donation_amount');
        $totalApplications = AdoptionApplication::count();

        // Get donations breakdown by type
        $donationBreakdown = Donation::selectRaw('donation_type, SUM(donation_amount) as total')
            ->groupBy('donation_type')
            ->pluck('total', 'donation_type')
            ->toArray();

        // Define the order you want for the chart
        $donationTypeMap = [
            'Monetary' => 'Monetary',
            'Food' => 'Food',
            'Medicine' => 'Medicine',
            'Other' => 'Other'
        ];

        $donationLabels = array_keys($donationTypeMap);
        $donationData = [];
        foreach ($donationTypeMap as $display => $dbKey) {
            $donationData[] = $donationBreakdown[$dbKey] ?? 0;
        }

        // Return the view with the data
        return view('dashboard', [
            'users' => $users,
            'totalUsers' => $totalUsers,
            'totalAdoptions' => $totalAdoptions,
            'totalDonations' => $totalDonations,
            'totalApplications' => $totalApplications,
            'adoptionsPerMonth' => $adoptionsPerMonth,
            'donationBreakdown' => $donationBreakdown,
            'donationLabels' => $donationLabels,
            'donationData' => $donationData,
        ]);
    }
}