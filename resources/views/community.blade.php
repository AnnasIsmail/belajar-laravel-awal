@extends('layouts.mainAfterLogin')

@section('container')

<main class="main-my-community">

  @foreach ($communities as $data)
  <div class="card community" style="width: 18rem;">
    <img src="{{ $data->UrlImage }}" class="card-img-top" alt="Logo ">
    <div class="card-body">
        <h5 class="card-title">{{ $data->Name }}</h5>
        <p class="card-text">{{ $data->Description }}</b> </p>
      </div>
      <div class="card-body link-bottom">
        <a href="{{ $data->LinkDiscord }}" target="_blank" class="card-link">Link Discord</a>
        <a href="/detail-community{{ $data->Slug }}" class="card-link">Detail Community</a>
      </div>
    </div>
  @endforeach

</main>
@endsection