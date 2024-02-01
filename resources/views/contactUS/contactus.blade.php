@extends('layouts.app')
@section('main')
<div class="container mt-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
      <div class="col-md-6">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-md-6">
        <h4>Our Location</h4>
        <p>1234 Street<br>City Gilgit, State Nagar</p>

        <h4>Contact Information</h4>
        <p>Email: muhammadsaqlain.cse@gmail.com<br>Phone: (+92) 310-9474972</p>
      </div>
    </div>
  </div>
  @endsection
