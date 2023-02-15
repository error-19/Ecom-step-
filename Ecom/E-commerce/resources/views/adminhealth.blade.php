@extends('master')
@section("content")
<a href="/admin">GO Back </a>
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="add" method="POST" >
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputname" placeholder="User Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Product price</label>
                <input type="number" name="price" class="form-control" id="exampleInputprice" placeholder="User Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Product category</label>
                <input type="text" name="category" class="form-control" id="exampleInputprice" placeholder="User Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Product details</label>
                <input type="text" name="description" class="form-control" id="exampleInputprice" placeholder="User Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Gallery Link</label>
                <input type="text" name="gallery" class="form-control" id="exampleInputprice" placeholder="User Name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
