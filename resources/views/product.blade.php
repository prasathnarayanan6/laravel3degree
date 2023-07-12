@extends('master')

@section("content")
<div class="container mt-3">
<div class="row">
    @foreach($products as $product)
    <div class="col-md-4 mt-2">
        <div class="card">
            <center><img src="{{$product->gallery}}" alt="Product Image" width="70%" class="card-image "></center>
            <!-- <center><img src="https://tse1.mm.bing.net/th?id=OIP.M71mXu7kyV4yF_3zXvKXoAHaHq&pid=Api&P=0&h=180" alt="Product Image" width="70%" class="card-image "></center> -->
            <div class="card-body">
                <h5 class="card-title">{{ $product->name}}</h5>
                <p class="card-price">{{$product->price}}</p>
                <p class="card-description">{{$product->Description}}</p>
                <div class="card-buttons">
                    <form action="{{route('addToCart')}}" method="POST">
                        @csrf
                        <input type="number" class="form-control mb-1" value="1" min="1" max="{{ $product->quantity }}"style="width:100px" name="quantity">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button type="submit" class="btn btn-success btn-add-to-cart" name="addToCart">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

</div>
@endsection

