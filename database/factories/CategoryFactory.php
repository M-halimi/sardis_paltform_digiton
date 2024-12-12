<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */

 class CategoryFactory extends Factory
 {
     /**
      * The name of the factory's corresponding model.
      *
      * @var string
      */
     protected $model = Category::class;

     /**
      * Define the model's default state.
      *
      * @return array
      */
      public function definition()
      {
          $name = $this->faker->word;
          $slug = Str::slug($name);

          return [
              'name' => $name,
              'slug' => $slug . '-' . Str::random(5), // Ensure uniqueness by adding a random string
              'description' => $this->faker->sentence,
              'parent_id' => null,
              'is_active' => $this->faker->boolean,
          ];
      }
 }
