@extends('master')

@section("content")
<div class="container">
    <div class="row d-flex justify-content-center login">
        <center><h4>Customer-Login</h4></center>
        <div class="col-md-4 mt-5">
        <form action="login" method="POST">
            <div class="mb-3">
                    @csrf
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <center><button type="submit" class="btn btn-outline-warning">Login</button></center>
        </form>
        </div>
    </div>
</div>
@endsection