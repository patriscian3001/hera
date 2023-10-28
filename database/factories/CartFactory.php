<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 5),
            'product_id' => $this->faker->numberBetween(1, 5),
            'quantity' => $this->faker->numberBetween(1, 10), // Generate a random quantity between 1 and 10
        ];
    }
}
