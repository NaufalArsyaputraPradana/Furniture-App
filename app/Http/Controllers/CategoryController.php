<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
            'image' => ['nullable','image','max:4096'],
            'is_active' => ['nullable','boolean'],
        ]);

        $slug = Str::slug($data['name']);
        
        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories','public');
        }

        // Generate AI description
        $aiDescription = $this->generateAIDescription($data['name']);

        Category::create([
            'name' => $data['name'],
            'slug' => $slug,
            'image_path' => $imagePath,
            'description' => $aiDescription,
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
            'image' => ['nullable','image','max:2048'],
            'description' => ['nullable','string'],
            'is_active' => ['nullable','boolean'],
        ]);
        
        $slug = Str::slug($data['name']);
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
            'description' => $data['description'] ?? $category->description,
            'is_active' => (bool)($data['is_active'] ?? $category->is_active),
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

    /**
     * Generate AI-powered category description
     */
    private function generateAIDescription($categoryName)
    {
        $descriptions = [
            'Kursi' => 'Koleksi kursi berkualitas tinggi dari pengrajin Jepara dengan berbagai desain mulai dari klasik hingga modern. Setiap kursi dibuat dari kayu pilihan dengan konstruksi kokoh dan finishing halus, memberikan kenyamanan optimal dan daya tahan lama.',
            
            'Meja' => 'Rangkaian meja furniture Jepara dengan kualitas premium yang cocok untuk berbagai kebutuhan ruangan. Dibuat dari kayu solid berkualitas tinggi dengan desain fungsional yang memadukan estetika dan kepraktisan.',
            
            'Lemari' => 'Koleksi lemari penyimpanan dengan desain elegant dan kapasitas optimal. Setiap lemari dikerjakan dengan detail presisi oleh pengrajin berpengalaman, menggunakan bahan kayu berkualitas tinggi yang tahan lama.',
            
            'Tempat Tidur' => 'Furniture tempat tidur premium dengan konstruksi solid dan desain yang menawan. Dibuat khusus untuk memberikan kenyamanan maksimal dengan kualitas kayu terbaik dan teknik pembuatan tradisional Jepara.',
            
            'Sofa' => 'Koleksi sofa dengan desain ergonomis dan material berkualitas tinggi. Menggabungkan kenyamanan duduk optimal dengan estetika ruangan yang elegan, cocok untuk berbagai konsep interior.',
            
            'Rak' => 'Solusi penyimpanan dan display dengan desain fungsional dan aesthetic. Setiap rak dibuat dengan pertimbangan kekuatan struktur dan keindahan bentuk untuk melengkapi kebutuhan rumah modern.',
        ];

        // Find matching category description
        foreach ($descriptions as $key => $description) {
            if (stripos($categoryName, $key) !== false) {
                return $description;
            }
        }

        // Default description for unknown categories
        return sprintf(
            'Koleksi %s berkualitas tinggi dari pengrajin furniture Jepara yang berpengalaman. ' .
            'Setiap produk dalam kategori ini dibuat dengan perhatian detail menggunakan bahan pilihan ' .
            'dan teknik pembuatan tradisional yang telah diwariskan turun-temurun. ' .
            'Menggabungkan fungsi praktis dengan nilai estetika untuk melengkapi kebutuhan rumah modern.',
            strtolower($categoryName)
        );
    }
}
