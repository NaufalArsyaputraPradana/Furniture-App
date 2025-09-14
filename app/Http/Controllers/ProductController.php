<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->latest('id')->paginate(12);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => ['required','exists:categories,id'],
            'name' => ['required','string','max:255'],
            'slug' => ['nullable','string','max:255','unique:products,slug'],
            'sku' => ['nullable','string','max:100'],
            'price' => ['required','numeric','min:0'],
            'compare_at_price' => ['nullable','numeric','min:0'],
            'stock' => ['nullable','integer','min:0'],
            'thumbnail' => ['nullable','image','max:4096'],
            'short_description' => ['nullable','string'],
            'description' => ['nullable','string'],
            'images.*' => ['nullable','image','max:4096'],
            'is_active' => ['nullable','boolean'],
            'is_featured' => ['nullable','boolean'],
        ]);
        $slug = $data['slug'] ?? Str::slug($data['name']);
        $thumbPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbPath = $request->file('thumbnail')->store('products','public');
        }
        $product = Product::create([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'slug' => $slug,
            'sku' => $data['sku'] ?? null,
            'thumbnail_path' => $thumbPath,
            'price' => $data['price'],
            'compare_at_price' => $data['compare_at_price'] ?? null,
            'stock' => $data['stock'] ?? 0,
            'is_active' => (bool)($data['is_active'] ?? true),
            'is_featured' => (bool)($data['is_featured'] ?? false),
            'short_description' => $data['short_description'] ?? null,
            'description' => $data['description'] ?? null,
        ]);

        if ($request->hasFile('images')) {
            $position = 0;
            foreach ($request->file('images') as $image) {
                $path = $image->store('products','public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => $path,
                    'position' => $position++,
                    'is_primary' => false,
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('status','Produk dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return redirect()->route('admin.products.edit', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');
        $product->load('images');
        return view('admin.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'category_id' => ['required','exists:categories,id'],
            'name' => ['required','string','max:255'],
            'slug' => ['nullable','string','max:255','unique:products,slug,'.$product->id],
            'sku' => ['nullable','string','max:100'],
            'price' => ['required','numeric','min:0'],
            'compare_at_price' => ['nullable','numeric','min:0'],
            'stock' => ['nullable','integer','min:0'],
            'thumbnail' => ['nullable','image','max:4096'],
            'short_description' => ['nullable','string'],
            'description' => ['nullable','string'],
            'is_active' => ['nullable','boolean'],
            'is_featured' => ['nullable','boolean'],
        ]);
        $slug = $data['slug'] ?? Str::slug($data['name']);
        $thumbPath = $product->thumbnail_path;
        if ($request->hasFile('thumbnail')) {
            if ($thumbPath) {
                Storage::disk('public')->delete($thumbPath);
            }
            $thumbPath = $request->file('thumbnail')->store('products','public');
        }
        $product->update([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'slug' => $slug,
            'sku' => $data['sku'] ?? null,
            'thumbnail_path' => $thumbPath,
            'price' => $data['price'],
            'compare_at_price' => $data['compare_at_price'] ?? null,
            'stock' => $data['stock'] ?? 0,
            'is_active' => (bool)($data['is_active'] ?? true),
            'is_featured' => (bool)($data['is_featured'] ?? false),
            'short_description' => $data['short_description'] ?? null,
            'description' => $data['description'] ?? null,
        ]);
        return redirect()->route('admin.products.index')->with('status','Produk diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->thumbnail_path) {
            Storage::disk('public')->delete($product->thumbnail_path);
        }
        foreach ($product->images as $img) {
            Storage::disk('public')->delete($img->path);
            $img->delete();
        }
        $product->delete();
        return redirect()->route('admin.products.index')->with('status','Produk dihapus');
    }
}
