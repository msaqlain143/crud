@extends('layouts.app')
@section('main')
<div class="container mt-2 ">
    <div class="text-right">
        <a href="{{route('loginP')}}" class="btn btn-primary m-2">Login </a>
    </div>
    <div id="myCarousel" class="carousel slide " data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item">
          <img src="/images/hometown.jpg" alt="HomeTown"  width="1200" height="300">
          <div class="carousel-caption">
            <h2><b>HomeTown</b></h2>
            <p>My HomeTown is always so Beautiful!</p>
          </div>
        </div>

        <div class="item active">
          <img src="/images/mountain.jpeg" alt="Mountains" width="1200" height="300">
          <div class="carousel-caption">
            <h2><b>Mountains</b></h2>
            <p>Mountains, Northern Area PK!</p>
          </div>
        </div>

        <div class="item">
          <img src="/images/glaciers.jpg" alt="Glaicers"  width="1200" height="300">
          <div class="carousel-caption ">
            <h2>Glaicers</h2>
            <p class="">We love the Charming Glaicers!</p>
          </div>
        </div>

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
  </div>
  <div class="container mt-5">
    <h1 class="text-center text-success mb-5">Our Products</h1>
    {{-- <div class="row pl-5">
        @foreach ($products as $product )
        <div class="col">
        <div class="card d-inline-block mb-3 " style="width: 22rem;">
          <img src="/images/apricot.jpg" class="card-img-top" alt="Apricot">
          <div class="card-body">
            <h5 class="card-title"> {{ $product->name }}</h5>
            <p class="card-text">
                {{ $product->description }}
            </p>
            <a href="{{ route('productdetail' , ['id' => $product->id]) }}" class="btn btn-primary">More Details</a>
          </div>
        </div>
      </div>
      @endforeach
    </div> --}}
  </div>
@endsection
