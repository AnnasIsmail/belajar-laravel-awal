@extends('layouts.mainAfterLogin')

@section('container')
<header class="header-my-community">
  <a href=""><button type="button" class="btn btn-outline-primary">< <span class="hide-responsive" >Back My Commnunity</span></button></a>

  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search Account" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
  </div>

  <a>
    <button type="button" class="btn btn-primary" id="liveToastBtn"><ion-icon size="small" name="people"></ion-icon> <span class="hide-responsive" >Show Member Community</span></button>
  </a>
  
</header>

<div class="card right400px" id="rightSideBar" style="width: 18rem;">
  <img class="imageSideBar image50vh" id="imageCommunitySideBar" src="https://img.freepik.com/free-vector/colorful-palm-silhouettes-background_23-2148541792.jpg?w=1380&t=st=1656772828~exp=1656773428~hmac=da9034e5aaa684fffa56e602425a5096357630431e5aea81afd6ab6ebd48ba08" class="card-img-top" alt="Logo ">
  <div class="card-body card-body-header">
    <button type="button" class="btn-close" aria-label="Close" id="closeToastBtn"></button>
    <button type="button" class="btn btn-outline-dark" id="buttonViewImage">View Original Image</button>
  </div>
  <div class="card-body">
    <h5 class="card-title">Kangkuk Community</h5>
    <p class="card-text">Akun yang dimiliki oleh anak buah bos kangkuk.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item list-group-item-community"><img src="https://i.pinimg.com/736x/76/6f/b8/766fb8a7764dc9f24f052f17fd95578f.jpg" alt=""><div><b>Felisa K</b><span><ion-icon name="ellipse"></ion-icon>Online</span></div></li>
    <li class="list-group-item list-group-item-community"><img src="https://i.pinimg.com/736x/76/6f/b8/766fb8a7764dc9f24f052f17fd95578f.jpg" alt=""><div><b>Felisa K</b><span><ion-icon name="ellipse"></ion-icon>Online</span></div></li>
    <li class="list-group-item list-group-item-community"><img src="https://i.pinimg.com/736x/76/6f/b8/766fb8a7764dc9f24f052f17fd95578f.jpg" alt=""><div><b>Felisa K</b><span><ion-icon name="ellipse"></ion-icon>Online</span></div></li>
    <li class="list-group-item list-group-item-community"><img src="https://i.pinimg.com/736x/76/6f/b8/766fb8a7764dc9f24f052f17fd95578f.jpg" alt=""><div><b>Felisa K</b><span><ion-icon name="ellipse"></ion-icon>Online</span></div></li>
    <li class="list-group-item list-group-item-community"><img src="https://i.pinimg.com/736x/76/6f/b8/766fb8a7764dc9f24f052f17fd95578f.jpg" alt=""><div><b>Felisa K</b><span><ion-icon name="ellipse"></ion-icon>Online</span></div></li>
    <li class="list-group-item list-group-item-community"><img src="https://i.pinimg.com/736x/76/6f/b8/766fb8a7764dc9f24f052f17fd95578f.jpg" alt=""><div><b>Felisa K</b><span><ion-icon name="ellipse"></ion-icon>Online</span></div></li>
    <li class="list-group-item list-group-item-community"><img src="https://i.pinimg.com/736x/76/6f/b8/766fb8a7764dc9f24f052f17fd95578f.jpg" alt=""><div><b>Felisa K</b><span><ion-icon name="ellipse"></ion-icon>Online</span></div></li>
    <li class="list-group-item list-group-item-community"><img src="https://i.pinimg.com/736x/76/6f/b8/766fb8a7764dc9f24f052f17fd95578f.jpg" alt=""><div><b>Felisa K</b><span><ion-icon name="ellipse"></ion-icon>Online</span></div></li>
    <li class="list-group-item list-group-item-community"><img src="https://i.pinimg.com/736x/76/6f/b8/766fb8a7764dc9f24f052f17fd95578f.jpg" alt=""><div><b>Felisa K</b><span><ion-icon name="ellipse"></ion-icon>Online</span></div></li>
  </ul>
  <div class="card-body">
    <a href="https://discord.gg/e3GqQdhGaN" target="_blank" class="card-link">Link Discord</a>
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