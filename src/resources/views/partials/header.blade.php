@php
    $nav_fixed_top='';
    ( $isProfile === true ) ? $nav_fixed_top = 'fixed-top' : '';
@endphp
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm bg-dark {{ $nav_fixed_top }}">
    <div class="container">
      {{-- <a class="navbar-brand fs-2" href="https://github.com/Cryxto">Cryxto</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center fs-4" id="navbarNavAltMarkup">
        <div class="navbar-nav text-center">
          <a class="nav-link mx-2" aria-current="page" href="{{ route('home') }}">Home</a>
          {{-- <a class="nav-link mx-2" aria-current="page" href="{{ route('note') }}">Note App</a> --}}
          <li class="nav-item dropdown mx-2">
            <a class="nav-link dropdown-toggle" href="{{ route('profile') }}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About Me
            </a>
            <ul class="dropdown-menu bg-dark dropdown-custom border-0" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item text-white" href="{{ route('profile') }}#profile">Profile</a></li>
              <li><a class="dropdown-item text-white" href="{{ route('profile') }}#about">About Me</a></li>
              <li><a class="dropdown-item text-white" href="{{ route('profile') }}#projects">Project</a></li>
              <li><a class="dropdown-item text-white" href="{{ route('profile') }}#daily-driver">Daily Driver</a></li>
              <li><a class="dropdown-item text-white" href="{{ route('profile') }}#contact">Contact</a></li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </nav>
  