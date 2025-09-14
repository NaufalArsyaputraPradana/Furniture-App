<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::first();
        if (!$category) {
            $category = Category::create([
                'name' => 'Umum',
                'slug' => 'umum',
                'is_active' => true,
            ]);
        }

        $products = [
            [
                'name' => 'Sofa Minimalis 3 Dudukan',
                'slug' => 'sofa-minimalis-3-dudukan',
                'price' => 3500000,
                'short_description' => 'Sofa minimalis nyaman untuk ruang tamu.',
            ],
            [
                'name' => 'Meja Kopi Kayu Jati',
                'slug' => 'meja-kopi-kayu-jati',
                'price' => 1200000,
                'short_description' => 'Meja kopi elegan dari kayu jati.',
            ],
            [
                'name' => 'Kursi Makan Rotan',
                'slug' => 'kursi-makan-rotan',
                'price' => 450000,
                'short_description' => 'Kursi makan bergaya natural.',
            ],
        ];

        foreach ($products as $data) {
            Product::updateOrCreate(
                ['slug' => $data['slug']],
                [
                    'category_id' => $category->id,
                    'name' => $data['name'],
                    'sku' => null,
                    'thumbnail_path' => null,
                    'price' => $data['price'],
                    'compare_at_price' => null,
                    'stock' => 10,
                    'is_active' => true,
                    'is_featured' => true,
                    'attributes' => null,
                    'short_description' => $data['short_description'],
                    'description' => null,
                ]
            );
        }
    }
}
