<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'slug' => $this->faker->slug,
            'description' => $this->faker->optional()->text(100),
            'image' => $this->faker->optional()->imageUrl(),
            'is_active' => $this->faker->boolean,
        ];
    }
}
