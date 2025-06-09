<?php

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselItem;

class HomeController extends Controller
{
    public function index()
    {
        $carouselItems = CarouselItem::latest()->get(); // No limit — loads all
        return view('home', compact('carouselItems'));
    }
}
