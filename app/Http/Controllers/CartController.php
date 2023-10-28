<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function index()
    {
        $userId = auth()->guard()->user()->id;
        // Retrieve and display the contents of the cart
        $cartItems = Cart::where('user_id', $userId)
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->whereNull('carts.deleted_at') // Exclude soft deleted products
            ->get(['carts.*', 'products.name', 'products.image', 'products.price']);

        // dd($cartItems);

        return view('cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request, $productId)
    {
        $userId = auth()->guard()->user()->id;

        // Check if the product is already in the cart
        $existingCartItem = Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($existingCartItem) {
            // Product already exists in the cart, so update the quantity
            $newQuantity = $existingCartItem->quantity + $request->quantity;
            $existingCartItem->update(['quantity' => $newQuantity]);
        } else {
            // Product doesn't exist in the cart, so create a new cart item
            Cart::create([
                'product_id' => $productId,
                'user_id' => $userId,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->route('cart.index');
    }

    public function updateCart(Request $request, $cartId)
    {

        $cartItem = Cart::where('id', $cartId)
            // ->where('user_id', $userId)
            ->first();

        if ($cartItem) {
            // Update the quantity for the cart item
            $cartItem->quantity = $request->quantity;
            $cartItem->save();
        }

        // Calculate the updated subtotal and total for the cart
        // $updatedSubtotal = $price * $request->quantity;
        // $updatedTotal = Cart::where('user_id', $userId)->sum(DB::raw('quantity * price'));

        return redirect()->back()->with('success', 'Cart item updated successfully');
    }

    public function removeFromCart($cartId)
    {
        $cartItem = Cart::find($cartId);
        if ($cartItem) {
            // Use the `delete` method to soft delete the model
            $cartItem->delete();
        }

        return redirect()->back()->with('success', 'Removed item from the cart successfully');
    }
}
