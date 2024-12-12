<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        "brand_id",
        "name",
        "slug",
        "description",
        "content",
        "price",
        "sale_price",
        "current_stock",
        "is_published",
        "published_at",
        "images",
        "sku",
        "security_stock",
        "barcode",
        "seo_title",
        "seo_description",
        "og_image",
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'images' => 'array',
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'current_stock' => 'integer',
        'security_stock' => 'integer',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('products');
    }
}
