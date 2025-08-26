<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $stats = [
            'products' => Product::count(),
            'categories' => Category::count(),
            'active_products' => Product::where('is_active', true)->count(),
        ];
        return view('admin.dashboard', compact('stats'));
    }
}
