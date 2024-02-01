
    @extends('layouts.app')
    @section('main')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="col-md-6 border p-4">
          <h2 class="text-center">Welcome to Login:</h2>
          <form action="{{ route('login-form') }}">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('signup') }}" class="btn btn-primary" type="submit">Signup</a>
          </form>
        </div>
      </div>
@endsection
