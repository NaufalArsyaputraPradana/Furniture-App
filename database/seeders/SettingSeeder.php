<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'store_name' => 'Toko Furniture Keren',
                'store_logo_path' => null,
                'whatsapp_number' => '6281234567890',
                'hero_title' => 'Furniture Minimalis & Elegan',
                'hero_subtitle' => 'Tingkatkan kenyamanan rumah Anda dengan koleksi terbaik kami.',
                'hero_image_path' => null,
                'social_links' => [
                    'instagram' => 'https://instagram.com/toko_furniture',
                    'facebook' => 'https://facebook.com/toko_furniture',
                ],
            ]
        );
    }
}
