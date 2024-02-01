@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="text-right">
                    <a href="/" class="btn btn-primary mt-2"><strong>Home</strong></a>
                </div>
                <div class="card mt-3 p-3">

                    <h3>Product Edit # {{ $data->name}}</h3>
                    <form action="/product/{{$data->id}}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control"
                                placeholder="Enter Name " aria-describedby="helpId"
                                value="{{old('name', $data ->name )}}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" rows="6" class="form-control"
                            placeholder="Please Mention More About Product ....">{{old('description',$data ->description)}}</textarea>
                            @if ($errors->has('description'))
                                    <span class="text-danger">{{$errors->first('description')}}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" id="" class="form-control"
                            value="{{old('image')}}" aria-describedby="helpId">
                                 @if ($errors->has('image'))
                                    <span class="text-danger">{{$errors->first('image')}}</span>
                                @endif
                        </div>

                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
