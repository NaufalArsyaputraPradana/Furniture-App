<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $slug
 * @property string|null $sku
 * @property string|null $thumbnail_path
 * @property float $price
 * @property float|null $compare_at_price
 * @property int $stock
 * @property bool $is_active
 * @property bool $is_featured
 * @property string|null $short_description
 * @property string|null $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'sku',
        'thumbnail_path',
        'price',
        'compare_at_price',
        'stock',
        'is_active',
        'is_featured',
        'attributes',
        'short_description',
        'description',
    ];

    protected $casts = [
        'attributes' => 'array',
        'price' => 'decimal:2',
        'compare_at_price' => 'decimal:2',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    // Accessor for main_image to use thumbnail_path
    public function getMainImageAttribute()
    {
        return $this->thumbnail_path;
    }
}
