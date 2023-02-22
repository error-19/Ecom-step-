@extends('master')
@section("content")
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img class="healthdetail-img"src="{{$health['gallery']}}" alt=" ">
</div>
<div class="col-sm-6">
  <a href="/">GO Back</a>
  <h2>{{$health['name']}}</h2>
     <h3>Price:{{$health['price']}}$</h3>
     <h4>Details:{{$health['description']}}</h4>
     <h4>category:{{$health['category']}}</h4>
     <br><br>
     <form action=" ">
        @csrf
        <input type="hidden" name="product_id" value={{$health['id']}}>
     <button class="btn btn-primary">Add to Cart</button>
</form>
     <!-- <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="health_id" value={{$health['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form> -->
     <br><br>
     <button class="btn btn-success">Buy Now</button>
     <br><br>
    </div>
</div>
</div>
@endsection