@extends('welcome')

@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

  <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="{{ asset('/img/hero-carousel/hero-carousel-5.jpg') }}" alt="Ace_Arts & Déco">

      <div class="carousel-container">
        <h2>
          <span>Ace_Arts & Déco</span>
        </h2>

        <p>
          Atelier de création, fabrication et personnalisation
          d’objets d’art en bois massif.
          Nous transformons le bois en pièces uniques,
          élégantes et durables pour sublimer vos espaces.
        </p>

        <div>
          <a href="{{ route('catalogues') }}" class="btn-get-started">
            Voir le Catalogue
          </a>

          <a href="#contact" class="btn-get-started">
            Nous Contacter
          </a>
        </div>
      </div>
    </div>
    <!-- End Carousel Item -->


    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="{{ asset('/img/hero-carousel/hero-carousel-1.jpg') }}" alt="Mobilier en bois">

      <div class="carousel-container">
        <h2>
          Des créations artisanales haut de gamme
        </h2>

        <p>
          Tables, meubles, décorations, enseignes,
          objets personnalisés et réalisations sur mesure :
          chaque création est pensée avec passion,
          précision et souci du détail.
        </p>

        <div>
          <a href="{{ route('catalogues') }}" class="btn-get-started">
            Nos Réalisations
          </a>

          <a href="#services" class="btn-get-started">
            Nos Services
          </a>
        </div>
      </div>
    </div>
    <!-- End Carousel Item -->


    <!-- Navigation -->
    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

  </div>

</section>
<!-- /Hero Section -->

    <!-- About Section -->
<section id="about" class="about section light-background">

  <div class="container">

    <div class="row gy-4">

      <!-- Image -->
      <div class="col-lg-6 position-relative align-self-start"
           data-aos="fade-up"
           data-aos-delay="100">

        <!-- Cadre image -->
        <div class="about-image-frame">
          <img src="{{ asset('/img/acearts/creation-sur-mesure1.jpg') }}"
               class="img-fluid"
               alt="Ace_Arts & Déco">
        </div>

      </div>

      <!-- Content -->
      <div class="col-lg-6 content"
           data-aos="fade-up"
           data-aos-delay="200">

        <h3>
          L’art du bois au service de l’élégance et du sur-mesure
        </h3>

        <p class="fst-italic">
          Ace_Arts & Déco est un atelier spécialisé dans la création,
          la fabrication et la personnalisation d’objets d’art,
          de meubles et de décorations en bois massif.
        </p>

        <ul>

          <li>
            <i class="bi bi-check2-all"></i>
            <span>
              Conception de meubles modernes, élégants et durables
              adaptés à tous types d’espaces.
            </span>
          </li>

          <li>
            <i class="bi bi-check2-all"></i>
            <span>
              Fabrication artisanale avec des finitions soignées
              et un savoir-faire unique.
            </span>
          </li>

          <li>
            <i class="bi bi-check2-all"></i>
            <span>
              Réalisation de projets personnalisés pour particuliers,
              entreprises, boutiques, restaurants et espaces professionnels.
            </span>
          </li>

        </ul>

        <p>
          Présents au Bénin et au Gabon,
          nous transformons chaque idée en une création authentique,
          alliant esthétique, qualité et durabilité.
          Notre objectif est d’offrir des réalisations uniques
          capables de valoriser chaque intérieur et chaque espace de vie.
        </p>

      </div>

    </div>

  </div>

</section>
<!-- /About Section -->
 
<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Nos Services</h2>
    <div>
      <span>Découvrez les services de</span>
      <span class="description-title">Ace_Arts & Déco</span>
    </div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <!-- Service 1 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

        <div class="service-card">

          <div class="service-image">
            <img src="{{ asset('/img/services/service-1.jpg') }}"
                 alt="Mobilier sur mesure"
                 class="img-fluid">
          </div>

          <div class="service-content">
            <h3>Mobilier sur mesure</h3>

            <p>
              Conception et fabrication de meubles uniques adaptés
              à vos goûts, vos dimensions et votre espace.
            </p>
          </div>

        </div>

      </div><!-- End Service -->

      <!-- Service 2 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">

        <div class="service-card">

          <div class="service-image">
            <img src="{{ asset('/img/services/service-2.jpg') }}"
                 alt="Décoration intérieure"
                 class="img-fluid">
          </div>

          <div class="service-content">
            <h3>Décoration intérieure</h3>

            <p>
              Création d’espaces élégants et modernes grâce à des
              décorations raffinées et harmonieuses.
            </p>
          </div>

        </div>

      </div><!-- End Service -->

      <!-- Service 3 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">

        <div class="service-card">

          <div class="service-image">
            <img src="{{ asset('/img/services/service-3.jpg') }}"
                 alt="Design professionnel"
                 class="img-fluid">
          </div>

          <div class="service-content">
            <h3>Design professionnel</h3>

            <p>
              Aménagement de bureaux, boutiques, bars,
              restaurants et espaces professionnels.
            </p>
          </div>

        </div>

      </div><!-- End Service -->

      <!-- Service 4 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

        <div class="service-card">

          <div class="service-image">
            <img src="{{ asset('/img/services/service-4.jpg') }}"
                 alt="Placards & rangements"
                 class="img-fluid">
          </div>

          <div class="service-content">
            <h3>Placards & rangements</h3>

            <p>
              Fabrication de placards modernes, cuisines,
              dressings et solutions de rangement pratiques.
            </p>
          </div>

        </div>

      </div><!-- End Service -->

      <!-- Service 5 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">

        <div class="service-card">

          <div class="service-image">
            <img src="{{ asset('/img/services/service-5.jpg') }}"
                 alt="Objets d’art"
                 class="img-fluid">
          </div>

          <div class="service-content">
            <h3>Objets d’art & déco</h3>

            <p>
              Réalisation de tableaux d’art, décorations murales
              et accessoires décoratifs en bois.
            </p>
          </div>

        </div>

      </div><!-- End Service -->

      <!-- Service 6 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">

        <div class="service-card">

          <div class="service-image">
            <img src="{{ asset('/img/services/service-6.jpg') }}"
                 alt="Personnalisation"
                 class="img-fluid">
          </div>

          <div class="service-content">
            <h3>Personnalisation</h3>

            <p>
              Personnalisation complète de meubles et créations
              selon votre style et vos envies.
            </p>
          </div>

        </div>

      </div><!-- End Service -->

    </div>

  </div>

</section>
<!-- /Services Section -->

    <!-- Catalogue Section -->
<section id="catalogue" class="menu section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Catalogue</h2>
    <div>
      <span>Découvrez nos</span>
      <span class="description-title">Créations artisanales</span>
    </div>
  </div><!-- End Section Title -->

  <div class="container isotope-layout"
       data-default-filter="*"
       data-layout="masonry"
       data-sort="original-order">

    <!-- Filters -->
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul class="menu-filters isotope-filters">

          <li data-filter="*" class="filter-active">Tout</li>
          <li data-filter=".filter-tables">Tables & Tablettes</li>
          <li data-filter=".filter-miroirs">Miroirs</li>
          <li data-filter=".filter-lits">Lits</li>
          <li data-filter=".filter-consoles">Consoles</li>
          <li data-filter=".filter-chaises">Chaises & Canapés</li>
          <li data-filter=".filter-bureaux">Bureaux & Comptoirs</li>
          <li data-filter=".filter-bar">Bar</li>
          <li data-filter=".filter-design">Design intérieur</li>
          <li data-filter=".filter-tableaux">Tableaux d’art</li>
          <li data-filter=".filter-placards">Placards</li>
          <li data-filter=".filter-cuisine">Ustensiles cuisine</li>
          <li data-filter=".filter-personnalisation">Personnalisation</li>

        </ul>
      </div>
    </div>

    <!-- ITEMS -->
    <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">

      <!-- TABLES -->
      <div class="col-lg-6 menu-item isotope-item filter-tables">
        <img src="{{ asset('/img/catalogue/tables.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Tables artisanales</a>
          <span>Sur mesure</span>
        </div>
        <div class="menu-ingredients">
          Tables en bois massif, design moderne ou traditionnel, finitions premium.
        </div>
      </div>

      <!-- MIROIRS -->
      <div class="col-lg-6 menu-item isotope-item filter-miroirs">
        <img src="{{ asset('/img/catalogue/miroirs.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Miroirs décoratifs</a>
          <span>Sur mesure</span>
        </div>
        <div class="menu-ingredients">
          Miroirs encadrés en bois sculpté pour intérieur élégant.
        </div>
      </div>

      <!-- LITS -->
      <div class="col-lg-6 menu-item isotope-item filter-lits">
        <img src="{{ asset('/img/catalogue/lits.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Lits en bois massif</a>
          <span>Premium</span>
        </div>
        <div class="menu-ingredients">
          Lits robustes, design personnalisé, confort et durabilité.
        </div>
      </div>

      <!-- CONSOLES -->
      <div class="col-lg-6 menu-item isotope-item filter-consoles">
        <img src="{{ asset('/img/catalogue/consoles.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Consoles élégantes</a>
          <span>Design</span>
        </div>
        <div class="menu-ingredients">
          Consoles modernes pour salons, entrées et espaces professionnels.
        </div>
      </div>

      <!-- CHAISES & CANAPES -->
      <div class="col-lg-6 menu-item isotope-item filter-chaises">
        <img src="{{ asset('/img/catalogue/chaises.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Chaises</a>
          <span>Confort</span>
        </div>
        <div class="menu-ingredients">
          Solide et design artisanal.
        </div>
      </div>

      <div class="col-lg-6 menu-item isotope-item filter-chaises">
        <img src="{{ asset('/img/catalogue/canapés.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Canapés</a>
          <span>Confort</span>
        </div>
        <div class="menu-ingredients">
          Mobilier confortable, solide et design artisanal.
        </div>
      </div>

      <!-- BUREAUX -->
      <div class="col-lg-6 menu-item isotope-item filter-bureaux">
        <img src="{{ asset('/img/catalogue/bureaux.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Bureaux & Comptoirs</a>
          <span>Pro</span>
        </div>
        <div class="menu-ingredients">
          Espaces de travail et personnalisés.
        </div>
      </div>

      <div class="col-lg-6 menu-item isotope-item filter-bureaux">
        <img src="{{ asset('/img/catalogue/comptoirs.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Comptoirs</a>
          <span>Pro</span>
        </div>
        <div class="menu-ingredients">
          Espaces de travail ergonomiques et personnalisés.
        </div>
      </div>

      <!-- BAR -->
      <div class="col-lg-6 menu-item isotope-item filter-bar">
        <img src="{{ asset('/img/catalogue/bar.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Bars en bois</a>
          <span>Design</span>
        </div>
        <div class="menu-ingredients">
          Comptoirs de bar modernes et personnalisés.
        </div>
      </div>

      <!-- DESIGN INTÉRIEUR -->
      <div class="col-lg-6 menu-item isotope-item filter-design">
        <img src="{{ asset('/img/catalogue/interieur.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Design intérieur</a>
          <span>Sur mesure</span>
        </div>
        <div class="menu-ingredients">
          Aménagement et décoration complète des espaces.
        </div>
      </div>

      <!-- TABLEAUX -->
      <div class="col-lg-6 menu-item isotope-item filter-tableaux">
        <img src="{{ asset('/img/catalogue/tableaux.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Tableaux d’art</a>
          <span>Artistique</span>
        </div>
        <div class="menu-ingredients">
          Créations artistiques et décoratives uniques.
        </div>
      </div>

      <!-- PLACARDS -->
      <div class="col-lg-6 menu-item isotope-item filter-placards">
        <img src="{{ asset('/img/catalogue/placards.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Placards sur mesure</a>
          <span>Rangement</span>
        </div>
        <div class="menu-ingredients">
          Solutions de rangement en bois fonctionnelles.
        </div>
      </div>

      <!-- CUISINE -->
      <div class="col-lg-6 menu-item isotope-item filter-cuisine">
        <img src="{{ asset('/img/catalogue/cuisine.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Ustensiles de cuisine</a>
          <span>Artisanat</span>
        </div>
        <div class="menu-ingredients">
          Objets en bois faits main pour cuisine élégante.
        </div>
      </div>

      <!-- PERSONNALISATION -->
      <div class="col-lg-6 menu-item isotope-item filter-personnalisation">
        <img src="{{ asset('/img/catalogue/personnalisation.jpg') }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="{{ route('catalogues') }}">Personnalisation</a>
          <span>Sur demande</span>
        </div>
        <div class="menu-ingredients">
          Gravures, designs et créations totalement personnalisées.
        </div>
      </div>

    </div>

  </div>

</section><!-- /Catalogue Section -->

<!-- Why Us Section -->
<section id="why-us" class="why-us section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Pourquoi Nous</h2>
    <div>
      <span>Pourquoi choisir</span>
      <span class="description-title">Ace_Arts & Déco</span>
    </div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card-item bg-card bg-card-1">
          <span>01</span>
          <h4>
            <a href="" class="stretched-link">Créations sur mesure</a>
          </h4>
          <p>
            Chaque réalisation est pensée selon les besoins et les goûts du client afin d’offrir des pièces uniques, élégantes et parfaitement adaptées à chaque espace.
          </p>
        </div>
      </div><!-- Card Item -->

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card-item bg-card bg-card-2">
          <span>02</span>
          <h4>
            <a href="" class="stretched-link">Qualité & durabilité</a>
          </h4>
          <p>
            Nous utilisons du bois massif et des matériaux soigneusement sélectionnés pour garantir des créations solides, durables et aux finitions impeccables.
          </p>
        </div>
      </div><!-- Card Item -->

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card-item bg-card bg-card-3">
          <span>03</span>
          <h4>
            <a href="" class="stretched-link">Savoir-faire artisanal</a>
          </h4>
          <p>
            Ace_Arts & Déco associe créativité, expertise artisanale et sens du détail pour transformer le bois en véritables œuvres décoratives et fonctionnelles.
          </p>
        </div>
      </div><!-- Card Item -->

    </div>

  </div>

</section><!-- /Why Us Section -->

    <!-- Request Quote Section -->
<section id="book-project" class="book-a-table section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Demande de projet</h2>
    <div>
      <span>Commandez votre</span>
      <span class="description-title">création sur mesure</span>
    </div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

      <!-- Image côté projet -->
      <div class="col-lg-4 reservation-img"
           style="background-image: url('{{ asset('/img/acearts/devis.jpg') }}');">
      </div>

      <!-- Formulaire -->
      <div class="col-lg-8 d-flex align-items-center reservation-form-bg"
           data-aos="fade-up" data-aos-delay="200">

        <form action="#" method="post" role="form" class="php-email-form">

          <div class="row gy-4">

            <div class="col-lg-4 col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nom complet" required>
            </div>

            <div class="col-lg-4 col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>

            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Téléphone" required>
            </div>

            <div class="col-lg-4 col-md-6">
              <select class="form-control" name="service" required>
                <option value="">Type de création</option>
                <option>Table & Tablette</option>
                <option>Miroir</option>
                <option>Lit</option>
                <option>Console</option>
                <option>Chaise & Canapé</option>
                <option>Bureau & Comptoir</option>
                <option>Bar</option>
                <option>Design intérieur</option>
                <option>Tableau d’art</option>
                <option>Placard</option>
                <option>Ustensiles cuisine</option>
                <option>Personnalisation</option>
              </select>
            </div>

            <div class="col-lg-4 col-md-6">
              <input type="date" name="deadline" class="form-control" id="date" placeholder="Délai souhaité">
            </div>

            <div class="col-lg-4 col-md-6">
              <input type="number" class="form-control" name="budget" id="budget" placeholder="Budget estimé">
            </div>

          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5"
                      placeholder="Décrivez votre projet (dimensions, style, bois souhaité...)"></textarea>
          </div>

          <div class="text-center mt-3">
            <div class="loading">Envoi...</div>
            <div class="error-message"></div>
            <div class="sent-message">
              Votre demande a été envoyée. Nous vous contacterons rapidement.
            </div>

            <button type="submit">Demander un devis</button>
          </div>

        </form>

      </div><!-- End Form -->

    </div>

  </div>

</section><!-- /Request Quote Section -->


<!-- Gallery Section -->
<section id="gallery" class="gallery section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Galerie</h2>
    <div>
      <span>Quelques réalisations de</span>
      <span class="description-title">Ace_Arts & Déco</span>
    </div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-1.jpg') }}');"></div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="150">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-2.jpg') }}');"></div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-3.jpg') }}');"></div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="250">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-4.jpg') }}');"></div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-5.jpg') }}');"></div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="350">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-6.jpg') }}');"></div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-7.jpg') }}');"></div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="450">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-8.jpg') }}');"></div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-9.jpg') }}');"></div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="550">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-10.jpg') }}');"></div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-11.jpg') }}');"></div>
      </div>

      <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="650">
        <div class="gallery-card" style="background-image: url('{{ asset('/img/gallery/gallery-12.jpg') }}');"></div>
      </div>

    </div>

  </div>

</section> 

    <!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background">

  <img src="{{ asset('/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt="">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>

      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Client Résidentiel</h3>
            <h4>Aménagement intérieur</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Grâce à Ace_Arts & Déco, notre salon a complètement changé d’ambiance. Le design est moderne, élégant et parfaitement adapté à notre espace.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Boutique Commerciale</h3>
            <h4>Design d’espace commercial</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Un travail exceptionnel sur l’aménagement de notre boutique. Le rendu attire plus de clients et reflète parfaitement notre image.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Projet Bureau</h3>
            <h4>Design professionnel</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Le bureau a été transformé en un espace de travail moderne et inspirant. Très bon sens du détail et du confort.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Projet Chambre</h3>
            <h4>Décoration personnalisée</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Une chambre chaleureuse, harmonieuse et parfaitement décorée selon nos goûts. Excellent travail.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Client Privé</h3>
            <h4>Projet sur mesure</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Un accompagnement professionnel du début à la fin. Le résultat final dépasse largement nos attentes.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>

      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->

    <!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <div>
      <span>Entrer en relation avec</span>
      <span class="description-title">Ace_Arts & Déco</span>
    </div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade">

    <div class="row gy-5 gx-lg-5">

      <div class="col-lg-4">

        <div class="info">
          <h3>Restons en contact</h3>
          <p>
            Vous avez un projet de décoration, de mobilier sur mesure ou d’aménagement intérieur ?
            Nous sommes disponibles pour vous accompagner de l’idée à la réalisation.
          </p>

          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>Localisation :</h4>
              <p>Libreville, Gabon</p>
              <p>Cotonou, Bénin</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email :</h4>
              <p>info@axeartdeco.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Téléphone :</h4>
              <p>+241 074370763 / +229 53529470</p>
            </div>
          </div><!-- End Info Item -->

        </div>

      </div>

      <div class="col-lg-8">

        <form action="{{ route('emails.contact.send') }}" method="POST" class="php-email-form">
         @csrf

          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required="">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required="">
            </div>
          </div>

          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet du projet (ex: salon, bureau...)" required="">
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="6"
              placeholder="Décrivez votre projet de décoration ou d’aménagement..." required=""></textarea>
          </div>

          <div class="my-3">
            <div class="loading">Envoi en cours...</div>
            <div class="error-message"></div>
            <div class="sent-message">Votre message a bien été envoyé. Nous vous répondrons rapidement.</div>
          </div>

          <div class="text-center">
            <button type="submit">Envoyer le message</button>
          </div>

        </form>

        @if(session('success'))
             <div class="alert alert-success mt-3">
              {{ session('success') }}
             </div>
        @endif

      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->

  </main>

@endsection