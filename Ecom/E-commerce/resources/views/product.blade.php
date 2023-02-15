@extends('master')
@section("content")
<div class="dropdown"style="margin-left:10px;margin-right:40px;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="width:140px;height:50px;font-size: 1.3em;">
   <b>Categories</b>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <button type="button" class="btn btn-default">
  <a class="dropdown-item" href="elec">Electric</a><br>
  </button>
  <br>
  <button type="button" class="btn btn-default">
  <a class="dropdown-item" href="cloth"><b>Cloths</b></a><br>
  </button>
  <br>
  <button type="button" class="btn btn-default">
  <a class="dropdown-item" href="health"><b>Health&Beauty</b></a><br>
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
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $item)
        <div class="item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['gallery']}}">
            <div class="carousel-caption slider-text">
              <h3>{{$item['name']}}</h3>
              <p>{{$item['description']}}</p>
            </div>
            </a>
          </div>
    
          @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="trending-wrapper">
        <h2>Shops</h2>
        @foreach($products as $item)
        <div class="trening-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}">
          <div class="">
            <h3>{{$item['name']}}</h3>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      </div>
</div>
@endsection