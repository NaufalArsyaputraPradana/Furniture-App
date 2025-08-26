<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function home()
    {
        $settings = Setting::first();
        $featured = Product::query()
            ->where('is_active', true)
            ->where('is_featured', true)
            ->latest('id')
            ->take(8)
            ->get();

        return view('home', compact('settings', 'featured'));
    }

    public function index(Request $request)
    {
        $query = Product::query()->with('category')
            ->where('is_active', true);

        if ($search = $request->string('q')->toString()) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        if ($categoryId = $request->integer('category_id')) {
            $query->where('category_id', $categoryId);
        }

        if ($request->filled('min_price')) {
            $query->where('price', '>=', (float) $request->input('min_price'));
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', (float) $request->input('max_price'));
        }

        $products = $query->latest('id')->paginate(12)->withQueryString();
        $categories = Category::select('id','name')->orderBy('name')->get();
        return view('catalog.index', compact('products','categories'));
    }

    public function show(string $slug)
    {
        $product = Product::with(['category', 'images'])
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
        $settings = Setting::first();
        return view('catalog.show', compact('product', 'settings'));
    }
}
