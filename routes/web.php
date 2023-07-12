<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

Route::get('/login', function () {
    return view('login');
});
Route::post("/login",[UserController::class,'login']);
Route::get("/products",[ProductController::class,'index']);
// Route::get("/addToCart",[UserController::class,'cart']);
// Route::post('/addToCart', 'CartController@addToCart')->name('addToCart');
Route::post("/addToCart", [CartController::class, 'addToCart'])->name('addToCart');




