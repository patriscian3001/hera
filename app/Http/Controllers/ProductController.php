<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function showProductById($id)
    {
        // Fetch the product based on the provided $id
        $product = Product::findOrFail($id);

        $sortedProducts = Product::paginate(3);

        // You can return a view or JSON response to display the product details
        return view('products.product-detail', compact('product', 'sortedProducts')); // Example for returning a view
    }

    public function showAllProducts(Request $request)
    {
        $sort = $request->input('sort', 'name'); // Default sorting by name

        $products = Product::query();

        switch ($sort) {
            case 'price':
                $products->orderBy('price');
                break;
            case 'rating':
                $products->orderBy('rating');
                break;
            case 'sale':
                // Implement sorting by sale based on the cart table and quantity
                $products->addSelect(['products.id', 'products.name', 'products.image', 'products.price', 'products.rating']);
                $products->leftJoin('carts', 'products.id', '=', 'carts.product_id')
                    ->selectRaw('SUM(carts.quantity) as total_quantity')
                    ->groupBy(['products.id', 'products.name', 'products.image', 'products.price', 'products.rating'])
                    ->orderBy('total_quantity', 'desc');
                break;
            default:
                // Default sorting by name
                $products->orderBy('name');
                break;
        }

        // Fetch all products from the database
        $sortedProducts = $products->paginate(3);

        return view('products.index', compact('sortedProducts', 'sort'));
    }

    public function showAllProductsAuth(Request $request)
    {
        $sort = $request->input('sort', 'name'); // Default sorting by name

        $products = Product::query();

        switch ($sort) {
            case 'price':
                $products->orderBy('price');
                break;
            case 'rating':
                $products->orderBy('rating');
                break;
            case 'sale':
                // Implement sorting by sale based on the cart table and quantity
                $products->addSelect(['products.id', 'products.name', 'products.image', 'products.price', 'products.rating']);
                $products->leftJoin('carts', 'products.id', '=', 'carts.product_id')
                    ->selectRaw('SUM(carts.quantity) as total_quantity')
                    ->groupBy(['products.id', 'products.name', 'products.image', 'products.price', 'products.rating'])
                    ->orderBy('total_quantity', 'desc');
                break;
            default:
                // Default sorting by name
                $products->orderBy('name');
                break;
        }

        // Fetch all products from the database
        $sortedProducts = $products->paginate(3);

        return view('products.products-authenticated', compact('sortedProducts', 'sort'));
    }
}
