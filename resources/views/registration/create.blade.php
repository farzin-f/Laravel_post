@extends('layouts.master')

@section('content')

  <div class="col-sm-8">
    <h2>Registeration</h2>

    @include('layouts/errors')

    <form method="post" action="/register">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" name="name" id="name" placeholder="Enter your name">
      </div>

      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      </div>

      <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" class="form-control" name="password_confirmation"
        id="password_confirmation" placeholder="Re-enter Password">
      </div>

      <button type="submit" class="btn btn-primary">Register</button>

    </form>

  </div>

@endsection
