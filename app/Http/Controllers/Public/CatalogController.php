<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function home()
    {
        try {
            $settings = Setting::first();
            
            // Create default settings if none exist
            if (!$settings) {
                $settings = Setting::create([
                    'store_name' => 'Bisa Furniture',
                    'whatsapp_number' => '085290505442',
                    'hero_title' => 'Furniture Modern untuk Rumah Impian',
                    'hero_subtitle' => 'Temukan koleksi furniture berkualitas tinggi dengan desain eksklusif dan teknologi terdepan untuk hunian modern Anda'
                ]);
            }
        } catch (\Exception $e) {
            // Fallback settings when database is unavailable
            $settings = (object) [
                'store_name' => 'Bisa Furniture',
                'whatsapp_number' => '085290505442',
                'hero_title' => 'Furniture Modern untuk Rumah Impian',
                'hero_subtitle' => 'Temukan koleksi furniture berkualitas tinggi dengan desain eksklusif dan teknologi terdepan untuk hunian modern Anda'
            ];
        }
        
        try {
            $featured = Product::query()
                ->with('category')
                ->where('is_active', true)
                ->where('is_featured', true)
                ->latest('id')
                ->take(8)
                ->get();
        } catch (\Exception $e) {
            $featured = collect(); // Empty collection as fallback
        }

        return view('home', compact('settings', 'featured'));
    }

    public function index(Request $request)
    {
        $query = Product::query()->with('category')
            ->where('is_active', true);

        if ($search = $request->string('search')->toString()) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($categoryId = $request->integer('category')) {
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
        try {
            $product = Product::with(['category', 'images'])
                ->where('slug', $slug)
                ->where('is_active', true)
                ->firstOrFail();
        } catch (\Exception $e) {
            abort(404, 'Product not found or database unavailable');
        }
        
        try {
            $settings = Setting::first();
        } catch (\Exception $e) {
            // Fallback settings when database is unavailable
            $settings = (object) [
                'whatsapp_number' => '085290505442'
            ];
        }
        
        return view('catalog.show', compact('product', 'settings'));
    }
}
