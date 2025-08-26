<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest('id')->paginate(12);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'slug' => ['nullable','string','max:255','unique:categories,slug'],
            'image' => ['nullable','image','max:2048'],
            'description' => ['nullable','string'],
            'is_active' => ['nullable','boolean'],
        ]);
        $slug = $data['slug'] ?? Str::slug($data['name']);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories','public');
        }
        Category::create([
            'name' => $data['name'],
            'slug' => $slug,
            'image_path' => $imagePath,
            'description' => $data['description'] ?? null,
            'is_active' => (bool)($data['is_active'] ?? true),
        ]);
        return redirect()->route('admin.categories.index')->with('status','Kategori dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return redirect()->route('admin.categories.edit', $category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'slug' => ['nullable','string','max:255','unique:categories,slug,'.$category->id],
            'image' => ['nullable','image','max:2048'],
            'description' => ['nullable','string'],
            'is_active' => ['nullable','boolean'],
        ]);
        $slug = $data['slug'] ?? Str::slug($data['name']);
        $imagePath = $category->image_path;
        if ($request->hasFile('image')) {
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image')->store('categories','public');
        }
        $category->update([
            'name' => $data['name'],
            'slug' => $slug,
            'image_path' => $imagePath,
            'description' => $data['description'] ?? null,
            'is_active' => (bool)($data['is_active'] ?? true),
        ]);
        return redirect()->route('admin.categories.index')->with('status','Kategori diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->image_path) {
            Storage::disk('public')->delete($category->image_path);
        }
        $category->delete();
        return redirect()->route('admin.categories.index')->with('status','Kategori dihapus');
    }
}
