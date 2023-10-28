<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->unsignedBigInteger('product_id'); // Foreign key to link to products table
            $table->unsignedBigInteger('user_id'); // Foreign key to link to users table
            $table->integer('quantity'); // Quantity of the product in the cart
            $table->timestamps(); // Created at and Updated at timestamps
            $table->softDeletes(); // Add soft deletes

            // Define foreign key constraints
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
