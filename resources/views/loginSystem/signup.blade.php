@extends('layouts.app')
@section('main')
    <div class="d-flex justify-content-center align-items-center m-3" style="min-height: 50vh;">
        <form action="{{ route('signup-form') }}" class="col-md-6 border p-4" method="POST">
            @csrf
            @method('POST')
          <h2 class="text-center mb-4">Sign Up Form</h2>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" id="name">
          </div>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" id="pwd">
          </div>
          <div class="form-group">
            <label for="cnpwd">Confirm Password:</label>
            <input type="password" class="form-control" name="confirm_password" placeholder="Enter Confirm Password" id="cnpwd">
          </div>


          <div class="form-group">
            <label for="cnpwd">Select Role :</label>
            <select name="role" id="">
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>

        </div>


          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
      </div>
@endsection
