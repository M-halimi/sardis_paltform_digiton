<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Seed Brands
        $this->call(BrandSeeder::class);

        // Seed Categories
        $this->call(CategorySeeder::class);

        // Seed Products
        $categories = Category::all();
        $brands = Brand::all();

        Product::factory(50)->create()->each(function ($product) use ($categories, $brands) {
            $product->categories()->attach($categories->random()->id); // Attach a random category
            $product->update(['brand_id' => $brands->random()->id]); // Assign a random brand to the product
        });

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
        ]);
    }
}
