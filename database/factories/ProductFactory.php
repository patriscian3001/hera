<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->sentence(3), // Generate a random product name
            'price' => $this->faker->randomFloat(2, 10, 1000), // Generate a random price with two decimal places
            'image' => $this->faker->imageUrl(400, 400, 'products', true), // Generate a placeholder image URL
            'rating' => $this->faker->numberBetween(1, 5), // Generate a random rating between 1 and 5
        ];
    }
}
