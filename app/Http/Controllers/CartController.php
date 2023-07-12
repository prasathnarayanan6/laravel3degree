<?php

namespace App\Http\Controllers;

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
}
