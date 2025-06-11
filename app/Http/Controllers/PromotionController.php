<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Carbon\Carbon;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->orderBy('end_date', 'asc')
            ->get();

        return view('promotions.page', compact('promotions'));
    }
}
