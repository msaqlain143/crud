@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="text-right">
                <a href="/" class="btn btn-primary mt-2"><strong>Home</strong></a>
            </div>
            <h2>Details Of Product :</h2>
            <div class="card p-4">
                <p>Name : <b>{{ $product ->name }}</b></p>
                <p>Description: <b>{{ $product ->description }}</b></p>
                <img src="/products/{{ $product ->image }}" alt="Product Image" class="rounded " width="50%">
            </div>
        </div>
    </div>
</div>
@endsection
