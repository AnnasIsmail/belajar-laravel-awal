@extends('layouts.mainAfterLogin')

@section('container')
<header class="header-my-community">
  <a href="community">
    <button type="button" class="btn btn-primary" id="addNewData"><ion-icon name="add-circle"></ion-icon> <span class="hide-responsive" >Add New Account</span></button>
  </a>

  <form class="input-group mb-3" action="/detail-community{{ $community->Slug }}" >
    <input type="text" class="form-control" placeholder="Search Account" name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
  </form>

  <a>
    <button type="button" class="btn btn-primary" id="liveToastBtn"><ion-icon size="small" name="people"></ion-icon> <span class="hide-responsive" >Show Member Community</span></button>
  </a>
  
</header>

<div class="card right400px" id="rightSideBar" style="width: 18rem;">
  <img class="imageSideBar image50vh" id="imageCommunitySideBar" src="{{ $community->UrlImage }}" class="card-img-top" alt="Logo ">
  <div class="card-body card-body-header">
    <button type="button" class="btn-close" aria-label="Close" id="closeToastBtn"></button>
    <button type="button" class="btn btn-outline-dark" id="buttonViewImage">View Original Image</button>
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $community->Name }}</h5>
    <p class="card-text">{{ $community->Description }}</p>
  </div>
  <ul class="list-group list-group-flush">
    @foreach ($member as $data)
    
      <li class="list-group-item list-group-item-community">
        <div class="left">
          <img src="{{ $data->Users->UrlImage }}" alt="">
          <div class="name-and-status">
            <b>{{ $data->Users->FirstName }} {{ $data->Users->LastName }}</b><span>
            <ion-icon name="ellipse"></ion-icon>Online</span>
          </div> 
        </div>
        <button type="button" class="btn btn-primary role" disabled>{{ $data->Role }}</button>
      </li>
        
    @endforeach
  </ul>
  <div class="card-body">
    <a href="{{ $community->LinkDiscord }}" target="_blank" class="card-link">Link Discord</a>
  </div>
</div>

<script>
  const toastTrigger = document.getElementById('rightSideBar');
  const livebtn = document.getElementById('liveToastBtn');
  const closebtn = document.getElementById('closeToastBtn');
  const btnViewImage = document.getElementById('buttonViewImage');
  const imageCSB = document.getElementById('imageCommunitySideBar');

    livebtn.addEventListener('click', () => {
      toastTrigger.classList.remove('right400px');
      toastTrigger.classList.add('animation10px');
      toastTrigger.classList.add('right10px');
      setTimeout(() => {
        toastTrigger.classList.remove('animation10px');
      }, 500);
    })
    
    closebtn.addEventListener('click', () => {
      toastTrigger.classList.remove('right10px');
      toastTrigger.classList.add('animation400px');
      toastTrigger.classList.add('right400px');
      toastTrigger.classList.add('right400px');
      setTimeout(() => {
        toastTrigger.classList.remove('animation400px');
      }, 500);
    })

    btnViewImage.addEventListener('click', () => {
      if(imageCSB.classList.contains('image50vh')){
        imageCSB.classList.remove('image50vh');
        btnViewImage.innerHTML = 'View Default Image';
      }else{
        imageCSB.classList.add('image50vh');
        btnViewImage.innerHTML = 'View Original Image';
      }
    })
</script>


<main class="main-my-community">

  @foreach ($account as $data)
  <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{ $data->RiotId }}#{{ $data->Tagline }} <a href="/update-account{{ $data->Slug }}"><ion-icon data-bs-toggle="tooltip" title="Edit Account" name="create-outline"></ion-icon></a> </h5>
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