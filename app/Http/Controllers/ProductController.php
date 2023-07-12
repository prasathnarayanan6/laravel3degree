<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Session;
class ProductController extends Controller
{
     function index()
    {
        $products = Product::all();
        return view('product', ['products'=>$products]);
    }
 }
