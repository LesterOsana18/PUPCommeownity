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

        // Calculate totals for adoptions, donations, and applications
        $totalAdoptions = Adoption::count();
        $totalDonations = Donation::sum('donation_amount');
        $totalApplications = AdoptionApplication::count();

        // Get adoptions per month
        $adoptionsPerMonth = Adoption::selectRaw('MONTHNAME(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', now()->year)
            ->groupBy('month')
            ->orderByRaw('MIN(MONTH(created_at))')
            ->pluck('count', 'month')
            ->toArray();

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
