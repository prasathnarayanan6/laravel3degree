@extends('master')

@section("content")
<div class="container mt-3">
    <h1>Cart</h1>
    @if ($cartItems->isEmpty())
        <p>Your cart is empty.</p>
    @else
            <div class="row">
            @foreach ($cartItems as $item)
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <center><img src="{{$item->gallery}}" alt="Product Image" width="70%" class="card-image "></center>
                        <!-- <center><img src="https://tse1.mm.bing.net/th?id=OIP.M71mXu7kyV4yF_3zXvKXoAHaHq&pid=Api&P=0&h=180" alt="Product Image" width="70%" class="card-image "></center> -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name}}</h5>
                            <p class="card-price">{{$item->price}}</p>
                            <p class="card-description"></p>
                            <div class="card-buttons">
                                <form action="" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-add-to-cart" name="">Buy</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
    @endif
</div>
@endsection
