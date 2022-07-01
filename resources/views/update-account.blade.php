@extends('layouts.mainAfterLogin')

@section('container')
<main class="main-login sign-up">
    <h2>Profile</h2>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ $data->RiotId }}">
        <label for="floatingInput">RiotId</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ $data->Tagline }}">
        <label for="floatingInput">Tagline</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ $data->Rank }}">
        <label for="floatingInput">Rank</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ $data->Username }}">
        <label for="floatingInput">Username</label>
      </div>

      <div class="form-floating mb">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" value="{{ $data->Password }}">
        <label for="floatingPassword">Password</label>
      </div>

    <div class="container-button">
        <a href="my-community"><button type="button" class="btn btn-danger">Cancel</button></a>
        <button type="button" class="btn btn-primary">Submit</button>
    </div>

  </main>
@endsection