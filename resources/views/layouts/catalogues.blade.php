@extends('welcome')

@section('content')

<main class="main">
 <!-- Catalogue Section -->
 <section id="catalogue" class="catalogue section light-background">

  <!-- Section Title -->
  <div class="container section-title mt-4" data-aos="fade-up">

    <div>
      <span>Découvrez les créations de</span>
      <span class="description-title">Ace_Arts & Déco</span>
    </div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <a href="{{ route('catalogue.show', 'Tables & Tablettes') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/tables.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Tables & Tablettes</h3>
          </div>
        </div>
    </a>
      </div>
             

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
        <a href="{{ route('catalogue.show', 'Miroirs') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/miroirs.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Miroirs</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <a href="{{ route('catalogue.show', 'Lits') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/lits.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Lits</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
        <a href="{{ route('catalogue.show', 'Consoles') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/consoles.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Consoles</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <a href="{{ route('catalogue.show', 'Chaises') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/chaises.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Chaises</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
        <a href="{{ route('catalogue.show', 'Canapés') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/canapés.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Canapés</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <a href="{{ route('catalogue.show', 'Bureaux') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/bureaux.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Bureaux</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
        <a href="{{ route('catalogue.show', 'Comptoirs') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/comptoirs.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Comptoirs</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <a href="{{ route('catalogue.show', 'Bar') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/bar.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Bar</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
        <a href="{{ route('catalogue.show', 'Design Intérieur') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/interieur.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Design intérieur</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <a href="{{ route('catalogue.show', 'Tableaux arts') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/tableaux.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Tableaux d’art</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="250">
        <a href="{{ route('catalogue.show', 'Placards') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/placards.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Placards</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <a href="{{ route('catalogue.show', 'Ustensiles de cuisine') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/cuisine.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Ustensiles cuisine</h3>
          </div>
        </div>
    </a>
      </div>

      <!-- Item -->
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="150">
        <a href="{{ route('catalogue.show', 'Personnalisation') }}">
        <div class="catalogue-card">
          <img src="{{ asset('/img/catalogue/personnalisation.jpg') }}" alt="">
          <div class="catalogue-overlay">
            <h3>Personnalisation</h3>
          </div>
        </div>
    </a>
      </div>

    </div>

  </div>

 </section>
 <!-- /Catalogue Section -->
</main>

@endsection