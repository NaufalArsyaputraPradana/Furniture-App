<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'store_name',
        'store_logo_path',
        'whatsapp_number',
        'hero_title',
        'hero_subtitle',
        'hero_image_path',
        'social_links',
    ];

    protected $casts = [
        'social_links' => 'array',
    ];
}
