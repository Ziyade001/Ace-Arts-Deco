<header id="header" class="header fixed-top">

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ asset('/img/logo.png') }}" alt="">
          <h1 class="sitename">Ace_Arts & Déco</h1>
        </a>

        <nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="{{ route('index') }}#about">À propos</a></li>
    <li><a href="{{ route('index') }}#services">Services</a></li>
    <li><a href="{{ route('catalogues') }}">Catalogue</a></li>
    <li><a href="{{ route('index') }}#gallery">Galerie</a></li>
    <li><a href="{{ route('index') }}#contact">Contact</a></li>
  </ul>

  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
        
      </div>

    </div>

  </header>