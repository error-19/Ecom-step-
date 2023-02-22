@extends('master')
@section("content")
<div class="dropdown"style="margin-left:10px;margin-right:40px;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="width:140px;height:50px;font-size: 1.3em;">
   <b>Insert Data</b>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <button type="button" class="btn btn-default">
  <a class="dropdown-item" href="adminelectric">Electric</a><br>
  </button>
  <br>
  <button type="button" class="btn btn-default">
  <a class="dropdown-item" href="admincloth"><b>Cloths</b></a><br>
  </button>
  <br>
  <button type="button" class="btn btn-default">
  <a class="dropdown-item" href="adminhealth"><b>Health&Beauty</b></a><br>
  </button>
  <br> <a class="dropdown-item" href="#">Home&Lifestyle</a><br>
    <a class="dropdown-item" href="#">Sports & Lifestyle</a><br>
    <a class="dropdown-item" href="#">Babies&Toys</a><br>
    <a class="dropdown-item" href="#">Groceries &pets</a><br>
    <a class="dropdown-item" href="#">Automobile</a><br>
    <a class="dropdown-item" href="#">Motorbike</a><br>
    <a class="dropdown-item" href="#">Car</a><br>
    <a class="dropdown-item" href="#">Computer</a><br>
    <a class="dropdown-item" href="#">Home and Kicchen</a><br>
    <a class="dropdown-item" href="#">Industrial and Scientific</a><br>
    <a class="dropdown-item" href="#">Software</a><br>
    <a class="dropdown-item" href="#">Arts & Crafts</a><br>
    <a class="dropdown-item" href="#">Stationery & Office</a><br>
    <a class="dropdown-item" href="#">Cleaning Supplies</a><br>
  </div>
</div>

<div class="dropdown"style="margin-left:10px;margin-right:40px;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="width:140px;height:50px;font-size: 1.3em;">
   <b>Delete Data</b>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <button type="button" class="btn btn-default">
  <a class="dropdown-item" href="list">Electronics</a><br>
  </button>
  <br>
  <button type="button" class="btn btn-default">
  <a class="dropdown-item" href="admincloth"><b>Cloths</b></a><br>
  </button>
  <br>
  <button type="button" class="btn btn-default">
  <a class="dropdown-item" href="adminhealth"><b>Health&Beauty</b></a><br>
  </button>
  <br> <a class="dropdown-item" href="#">Home&Lifestyle</a><br>
    <a class="dropdown-item" href="#">Sports & Lifestyle</a><br>
    <a class="dropdown-item" href="#">Babies&Toys</a><br>
    <a class="dropdown-item" href="#">Groceries &pets</a><br>
    <a class="dropdown-item" href="#">Automobile</a><br>
    <a class="dropdown-item" href="#">Motorbike</a><br>
    <a class="dropdown-item" href="#">Car</a><br>
    <a class="dropdown-item" href="#">Computer</a><br>
    <a class="dropdown-item" href="#">Home and Kicchen</a><br>
    <a class="dropdown-item" href="#">Industrial and Scientific</a><br>
    <a class="dropdown-item" href="#">Software</a><br>
    <a class="dropdown-item" href="#">Arts & Crafts</a><br>
    <a class="dropdown-item" href="#">Stationery & Office</a><br>
    <a class="dropdown-item" href="#">Cleaning Supplies</a><br>
  </div>
</div>

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="admin" method="POST" >
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
