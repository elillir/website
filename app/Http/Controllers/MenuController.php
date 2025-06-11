<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;

class MenuController extends Controller
{
    public function index()
    {
        $categories = Category::with('menus')->get();

        return view('menu.page', [
            'categories' => $categories
        ]);
    }
}
