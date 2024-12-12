<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "slug",
        "description",
        "image",
        "is_active",
        "seo_title",
        "seo_description",
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class );
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('brand-cover');
        $this->addMediaCollection('og-brand-cover');
    }

    public function scopePublished($query, bool $condition = true)
    {
        return $query->where('is_active', $condition);
    }
}
