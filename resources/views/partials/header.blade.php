<header class="lv_header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img src="/img/logo.png" alt="logo_agency" width="100" height="100">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav nav-pills">
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'offers' ? 'active' : ''}}" href="{{ route('offers')}}">Offers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{ route('about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{ route('contacts')}}">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
