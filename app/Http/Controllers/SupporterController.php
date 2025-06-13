<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supporter;

class SupporterController extends Controller
{
    public function show()
    {
        $supporters = Supporter::all(); // all for the modal
        $previewSupporters = Supporter::take(3)->get(); // 3 for preview

        return view('about', compact('supporters', 'previewSupporters'));
    }
}
