@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="text-right">
            <a href="/" class="btn btn-primary mt-2">Back</a>
        </div>
        <h1>New Products </h1>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form action="/product/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control"
                                placeholder="Enter Name " aria-describedby="helpId"
                                value="{{old('name')}}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" rows="6" class="form-control" value="{{old('description')}}"
                            placeholder="Please Mention More About Product ...."></textarea>
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
                        <button type="submit" class="btn btn-dark mt-1">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
