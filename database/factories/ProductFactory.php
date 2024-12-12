<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'name' => $faker->unique()->word, // Ensure unique names
            'slug' => $faker->slug,
            'description' => $faker->text(255),
            'content' => $faker->paragraph,
            'price' => $faker->randomFloat(2, 10, 100),
            'sale_price' => $faker->optional()->randomFloat(2, 5, 50),
            'current_stock' => $faker->numberBetween(1, 100),
            'is_published' => $faker->boolean,
            'published_at' => $faker->dateTimeThisYear,
            'sku' => $faker->unique()->word,
            'security_stock' => $faker->numberBetween(1, 10),
            'barcode' => $faker->ean13,
            'seo_title' => $faker->sentence,
            'seo_description' => $faker->sentence,
            'og_image' => $faker->imageUrl,
            'category_id' => Category::inRandomOrder()->first()->id,
            'brand_id' => Brand::inRandomOrder()->first()->id,
        ];
    }

    }
