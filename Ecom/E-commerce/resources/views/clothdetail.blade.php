@extends('master')
@section("content")
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img class="clothdetail-img"src="{{$cloth['gallery']}}" alt=" ">
</div>
<div class="col-sm-6">
  <a href="/">GO Back</a>
  <h2>{{$cloth['name']}}</h2>
     <h3>Price:{{$cloth['price']}}$</h3>
     <h4>Details:{{$cloth['description']}}</h4>
     <h4>category:{{$cloth['category']}}</h4>
     <br><br>
     <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="cloth_id" value={{$cloth['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
     <br><br>
     <button class="btn btn-success">Buy Now</button>
     <br><br>
    </div>
</div>
</div>
@endsection