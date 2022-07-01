@extends('layouts.mainAfterLogin')

@section('container')
<main class="main-my-community">

  @foreach ($account as $data)
  <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{ $data->RiotId }}#{{ $data->Tagline }} <a href="/update-account{{ $data->slug }}"><ion-icon data-bs-toggle="tooltip" title="Edit Account" name="create-outline"></ion-icon></a> </h5>
        <p class="card-text">Rank: <b>{{ $data->Rank }}</b> </p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><p>Username: <b>{{ $data->Username }}</b>  </p><ion-icon data-bs-toggle="tooltip" title="Copy Username" size="small" name="clipboard-outline"></ion-icon></li>
        <li class="list-group-item"><p>Password: <b>{{ $data->Password }}</b></p>  <ion-icon data-bs-toggle="tooltip" title="Copy Password" size="small" name="clipboard-outline"></ion-icon></li>
      </ul>
      <div class="card-body link-bottom">
        <a href="https://tracker.gg/valorant/profile/riot/{{ $data->RiotId }}%23{{ $data->Tagline }}/overview" target="_blank" class="card-link">View on tracker.gg</a>
        <a href="https://auth.riotgames.com/login#acr_values=urn%3Ariot%3Agold&client_id=accountodactyl-prod&redirect_uri=https%3A%2F%2Faccount.riotgames.com%2Foauth2%2Flog-in&response_type=code&scope=openid%20email%20profile%20riot%3A%2F%2Friot.atlas%2Faccounts.edit%20riot%3A%2F%2Friot.atlas%2Faccounts%2Fpassword.edit%20riot%3A%2F%2Friot.atlas%2Faccounts%2Femail.edit%20riot%3A%2F%2Friot.atlas%2Faccounts.auth%20riot%3A%2F%2Fthird_party.revoke%20riot%3A%2F%2Fthird_party.query%20riot%3A%2F%2Fforgetme%2Fnotify.write%20riot%3A%2F%2Friot.authenticator%2Fauth.code%20riot%3A%2F%2Frso%2Fmfa%2Fdevice.write&state=dada9010-aad9-492c-80f4-d8223e48279e" target="_blank" class="card-link">Riot Account</a>
      </div>
    </div>
  @endforeach

</main>
@endsection