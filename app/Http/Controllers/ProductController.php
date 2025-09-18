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
            'sku' => ['nullable','string','max:255'],
            'price' => ['required','numeric','min:0'],
            'compare_at_price' => ['nullable','numeric','min:0'],
            'stock' => ['nullable','integer','min:0'],
            'thumbnail' => ['required','image','max:4096'],
            'images.*' => ['nullable','image','max:4096'],
            'short_description' => ['nullable','string'],
            'is_active' => ['nullable','boolean'],
            'is_featured' => ['nullable','boolean'],
        ]);

        $slug = Str::slug($data['name']);
        
        // Handle thumbnail upload
        $thumbPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbPath = $request->file('thumbnail')->store('products','public');
        }

        // Generate AI description
        $category = Category::find($data['category_id']);
        $aiDescription = $this->generateAIDescription($data['name'], $category->name);

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
            'description' => $aiDescription,
        ]);

        // Handle additional images
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
        $slug = Str::slug($data['name']);
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

    /**
     * Generate AI-powered product description
     */
    private function generateAIDescription($productName, $categoryName)
    {
        // AI-powered description templates for Jepara furniture
        $templates = [
            'Kursi' => [
                'materials' => ['kayu jati premium', 'kayu mahoni pilihan', 'kayu akasia berkualitas'],
                'features' => ['desain ergonomis', 'finishing halus', 'konstruksi kokoh', 'ukiran tradisional Jepara'],
                'benefits' => ['tahan lama puluhan tahun', 'nyaman untuk duduk', 'menambah kesan elegan ruangan']
            ],
            'Meja' => [
                'materials' => ['kayu jati solid', 'kayu mahoni premium', 'kayu trembesi alami'],
                'features' => ['permukaan halus rata', 'desain minimalis modern', 'struktur kuat stabil'],
                'benefits' => ['cocok untuk berbagai kegiatan', 'mudah dibersihkan', 'investasi jangka panjang']
            ],
            'Lemari' => [
                'materials' => ['kayu jati berkualitas tinggi', 'kayu mahoni pilihan', 'kayu akasia solid'],
                'features' => ['sistem engsel berkualitas', 'kapasitas penyimpanan besar', 'desain fungsional'],
                'benefits' => ['organizing rumah lebih rapi', 'awet dan tahan rayap', 'nilai estetika tinggi']
            ],
            'Tempat Tidur' => [
                'materials' => ['kayu jati grade A', 'kayu mahoni solid', 'finishing natural'],
                'features' => ['konstruksi tanpa paku', 'headboard artistic', 'ukuran presisi'],
                'benefits' => ['tidur lebih berkualitas', 'tidak berbunyi saat bergerak', 'investasi furniture terbaik']
            ]
        ];

        // Find matching category or use default
        $categoryKey = 'Meja'; // default
        foreach (array_keys($templates) as $cat) {
            if (stripos($categoryName, $cat) !== false) {
                $categoryKey = $cat;
                break;
            }
        }

        $template = $templates[$categoryKey];
        $material = $template['materials'][array_rand($template['materials'])];
        $features = array_rand(array_flip($template['features']), 2);
        $benefits = array_rand(array_flip($template['benefits']), 2);

        $description = sprintf(
            "%s merupakan produk furniture berkualitas tinggi dari pengrajin Jepara yang berpengalaman. " .
            "Dibuat dari %s dengan %s dan %s yang memastikan kualitas premium. " .
            "Keunggulan produk ini adalah %s dan %s, menjadikannya pilihan tepat untuk melengkapi rumah Anda. " .
            "Dengan tradisi kerajinan Jepara yang telah diwariskan turun-temurun, setiap detail dikerjakan dengan teliti " .
            "untuk menghadirkan furniture yang tidak hanya indah dipandang tetapi juga fungsional dan tahan lama.",
            $productName,
            $material,
            $features[0],
            $features[1],
            $benefits[0],
            $benefits[1]
        );

        return $description;
    }
}
