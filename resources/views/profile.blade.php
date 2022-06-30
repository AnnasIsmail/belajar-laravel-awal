@extends('layouts.mainAfterLogin')

@section('container')
<main class="main-login sign-up">
    <h2>Profile</h2>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">First Name</label>
      </div>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Last Name</label>
      </div>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Username</label>
      </div>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      
      <div class="form-floating mb-2">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">re-Password</label>
      </div>

    {{-- <div class="container-button">
        <a href="sign-in"><button type="button" class="btn btn-light">Edit</button></a>
        <button type="button" class="btn btn-primary">Submit</button>
    </div> --}}

  </main>
@endsection