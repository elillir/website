<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Promotion;

class HomeController extends Controller
{
    public function index()
    {
        $promotions = Promotion::where('start_date', '<=', now())
            ->where('end_date', '>=', now())
            ->latest()
            ->take(3)
            ->get();

        $popularMenu = Menu::where('is_available', true)
            ->inRandomOrder()
            ->take(6)
            ->get();

        return view('pages.index', compact('promotions', 'popularMenu'));
    }
}
