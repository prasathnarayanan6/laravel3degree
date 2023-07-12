<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Models\Cart;
class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validate the form input
        $request->validate([
            'quantity' => 'required|integer|min:1',
            'id' => 'required|exists:products,id'
        ]);

        $productId = $request->input('id');
        $quantity = $request->input('quantity');

        // Retrieve the product
        $product = Product::find($productId);

        // Create or update the cart entry for the product
        $cart = Cart::where('product_id', $productId)->first();
        if ($cart) {
            // If the product is already in the cart, update the quantity
            $cart->quantity += $quantity;
            $cart->save();
        } else {
            // If the product is not in the cart, create a new entry
            Cart::create([
                'product_id' => $productId,
                'quantity' => $quantity
            ]);
        }

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Product added to cart successfully');
    }
}
