@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Product Search</h1>
        <form action="" method="GET">
            <div class="input-group mb-3 col-md-4">
                <input type="text" class="form-control " placeholder="Search for products" name="search" value="{{ $search }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
        <h2>Search Results:</h2>
        @foreach ($products as $product)
            <div>
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <!-- Other product details -->
                <img src="/products/{{ $product ->image }}" alt="Product Image" class="rounded " width="20%">
            </div>
        @endforeach
    </div>

@endsection
