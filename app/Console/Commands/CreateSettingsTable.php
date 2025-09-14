<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:settings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create settings table and default data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            // Check if settings table exists
            if (!Schema::hasTable('settings')) {
                DB::statement("
                    CREATE TABLE settings (
                        id bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        store_name varchar(255) NOT NULL DEFAULT 'Bisa Furniture',
                        store_logo_path varchar(255) NULL,
                        whatsapp_number varchar(255) NULL,
                        hero_title varchar(255) NULL,
                        hero_subtitle text NULL,
                        hero_image_path varchar(255) NULL,
                        social_links json NULL,
                        created_at timestamp NULL,
                        updated_at timestamp NULL
                    )
                ");
                $this->info('Settings table created successfully!');
            } else {
                $this->info('Settings table already exists!');
            }
            
            // Create default settings record
            DB::table('settings')->updateOrInsert(
                ['id' => 1],
                [
                    'store_name' => 'Bisa Furniture',
                    'whatsapp_number' => '085290505442',
                    'hero_title' => 'Furniture Modern untuk Rumah Impian',
                    'hero_subtitle' => 'Temukan koleksi furniture berkualitas tinggi dengan desain eksklusif dan teknologi terdepan untuk hunian modern Anda',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
            $this->info('Default settings created successfully!');
            
            return 0;
            
        } catch (\Exception $e) {
            $this->error('Error: ' . $e->getMessage());
            return 1;
        }
    }
}
