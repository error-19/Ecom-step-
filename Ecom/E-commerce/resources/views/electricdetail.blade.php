@extends('master')
@section("content")
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img class="clothdetail-img"src="{{$electric['gallery']}}" alt=" ">
</div>
<div class="col-sm-6">
  <a href="/">GO Back</a>
  <h2>{{$electric['name']}}</h2>
     <h3>Price:{{$electric['price']}}$</h3>
     <h4>Details:{{$electric['description']}}</h4>
     <h4>category:{{$electric['category']}}</h4>
     <br><br>
     <form action=" ">
        @csrf
     <button class="btn btn-primary">Add to Cart</button>
</form>
<br><br>
     <button class="btn btn-success">Buy Now</button>
     <br><br>
    </div>
</div>
</div>
@endsection