<?php
// use App\Models\Cart; // Assuming you have a Cart model for the cart table
// $cartCount = Cart::count();
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

// Retrieve the user identifier from the session
$userId = Session::get('user');

// Fetch the cart count for the user
$cartCount = Cart::where('customerId', $userId)->count();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">E-Cart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Orders</a>
        </li>
        <li class="nav-item">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning" type="submit">Search</button>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">cart(({{ $cartCount }}))</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
