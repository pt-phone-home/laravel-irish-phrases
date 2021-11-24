<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
  <div class="container">
    <a href="{{route('home')}}" class="navbar-brand">Irish Phrases</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/#random" class="nav-link">Discover Phrases</a>
        </li>
        {{-- <li class="nav-item">
          <a href="{{route('random')}}" class="nav-link">Random Phrases</a>
        </li> --}}
        <li class="nav-item">
          <a href="#" class="nav-link">Get the mobile app</a>
        </li>
        <li class="nav-item">
          <a href="/#contact" class="nav-link">Contact</a>
        </li>
      </ul>
    </div>    
  </div>
  
</nav>


{{-- <div class="container">
  <a class="navbar-brand" href="{{route('home')}}">
    <img src="" alt="" style="height: 50px">
    Irish Phrases
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Get the app</a>
      </li>
    </ul>
    <form class="d-flex" method="POST" action={{route('search')}}>
      @csrf
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchTerm">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
  </div>
</div> --}}