<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Import the Product model
use Database\Factories\ProductFactory; // Import the ProductFactory

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Use the ProductFactory to create and insert product records
        Product::factory(10)->create(); // Seed 10 product records
    }
}
