<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cart;
use Session;
class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        if(session()->has('user'))
        {
            $item=new Cart();
            $item->quantity=$request->input('quantity');
            $item->productId=$request->input('id');
            $item->customerId=session()->get('user');
            $item->save();
            return redirect()->back()->with('success','Item added');
        } 
        else
        {
            return redirect('login')->with('success', 'Congrats!');
        }
    }
    static function data()
    {
        $cart = Session::get('user');
        return Cart::where('customerId',$cart)->count();
    }

    public function showCart()
    {
    // Retrieve the cart items based on the logged-in user or session data
    $userId = Session::get('user');
    // $cartItems = Cart::where('customerId', $userId)->get();
    $cartItems = DB::table('carts')
        ->join('products', 'carts.productId', '=', 'products.id')
        ->select('products.name', 'products.price', 'carts.quantity', 'products.gallery')
        ->where('carts.customerId', $userId)
        ->get();
    // Pass the cart items to the view
    return view('cart', ['cartItems' => $cartItems]);
    }


}
