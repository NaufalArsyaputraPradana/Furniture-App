<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Sofa', 'slug' => 'sofa'],
            ['name' => 'Meja', 'slug' => 'meja'],
            ['name' => 'Kursi', 'slug' => 'kursi'],
            ['name' => 'Lemari', 'slug' => 'lemari'],
            ['name' => 'Tempat Tidur', 'slug' => 'tempat-tidur'],
        ];

        foreach ($categories as $data) {
            Category::updateOrCreate(
                ['slug' => $data['slug']],
                [
                    'name' => $data['name'],
                    'image_path' => null,
                    'description' => null,
                    'is_active' => true,
                ]
            );
        }
    }
}
