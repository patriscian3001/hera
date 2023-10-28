<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    public function run()
    {
        // Use the Cart factory to create a specified number of cart entries
        Cart::factory()->count(20)->create(); // This will create 20 cart entries
    }
}
