<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/products', function () {
//     return view('products');
// })->name('products');

// Define a route to show a specific product by ID
Route::get('/products/{id}', [ProductController::class, 'showProductById'])
    ->name('product-detail.show');

// Define a route to show all products
Route::get('/products', [ProductController::class, 'showAllProducts'])
    ->name('products.showAllProducts');

//Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.addToCart');
Route::post('/cart/update/{cartId}', [CartController::class, 'updateCart'])->name('cart.updateCart');
Route::delete('/cart/remove/{cartId}', [CartController::class, 'removeFromCart'])->name('cart.removeFromCart');


Route::get('/home', function () {
    return view('home');
})->name('home.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact.show');

// Define a route to show all products
Route::get('/authnticated-products', [ProductController::class, 'showAllProductsAuth'])
    ->name('products.showAllProductsAuth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
