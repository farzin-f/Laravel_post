@extends('layouts/master')

@section('content')

  <div class="col-sm-6">
    <div class="jumbotron">

      @include('layouts/errors')

      <form action="/login" method="post">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Log In</button>

      </form>

    </div>
  </div>

@endsection
