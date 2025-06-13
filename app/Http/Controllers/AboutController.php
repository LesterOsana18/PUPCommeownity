<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamCommittee;
use App\Models\Supporter;
use App\Models\Resource;

class AboutController extends Controller
{
    public function index()
    {
        $committees = TeamCommittee::all();
        $previewCommittees = TeamCommittee::limit(5)->get();

        $supporters = Supporter::all();
        $previewSupporters = Supporter::limit(3)->get();

        $resources = Resource::all();
        $previewResources = Resource::limit(4)->get();

        return view('about', compact(
            'committees',
            'previewCommittees',
            'supporters',
            'previewSupporters',
            'resources',
            'previewResources'
        ));
    }
}
