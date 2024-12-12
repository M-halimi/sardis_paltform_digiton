<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure there are categories in the database
        $categories = Category::all();

        if ($categories->isEmpty()) {
            // You may want to add some default categories if none exist
            Category::factory(5)->create();
            $categories = Category::all(); // Re-fetch after creating categories
        }

        Product::factory(50)->create()->each(function ($product) use ($categories) {
            $product->categories()->attach($categories->random()->id); // Attach a random category to each product
        });
    }

}
