@extends('layouts.master')
@section('content')
<div class="container mt-3">
    <div class="text-right">
        <a href="/product/create" class="btn btn-dark mt-2">Create Product </a>
    </div>
    <h1 class="text-center">Products Detail </h1>


    <div class="card text-center">
        <div class="card-title">

            <h4><span>Product Name</span>  =  {{$product->name}} </h4>
            <h4><span>Product Detail</span>  =  {{$product->description}} </h4>

        </div>

    </div>






    {{-- <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
          <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$product->name}}</td>
            <td>
                <img src="products/{{$product->image}}" alt="" class="rounded-circle" width="50px" height="30px">
            </td>
                <td>
                    <a href="product/{{$product->id}}/show" class="btn btn-primary ">Show</a>
                    <a href="product/{{$product->id}}/edit" class="btn btn-dark ">Edit</a>
                    <a href="#" class="btn btn-danger"  onclick="deleteProduct({{ $product->id }})">Delete</a>

                    <form id="delete-form" action="{{ route('delete-product', $product->id) }}" method="GET" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    <script>
                        function deleteProduct(productId) {
                            if (confirm('Are you sure you want to delete this product?')) {
                                document.getElementById('delete-form').submit();
                            }
                        }
                    </script>
                </td>
           </tr>
          @endforeach
        </tbody>
    </table> --}}

</div>
@endsection
