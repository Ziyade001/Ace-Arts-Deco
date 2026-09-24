@extends('welcome')

@section('content')

<main class="main">

<!-- Catalogue Details Section -->
<section class="catalogue-details section light-background">

    <!-- Section Title -->
    <div class="container section-title mt-5" data-aos="fade-up">

        <h2>{{ $categorie }}</h2>

        <div>
            <span>Découvrez nos réalisations</span>
            <span class="description-title">{{ $categorie }}</span>
        </div>

        <p class="mt-3">
            Explorez une sélection de créations artisanales conçues avec soin,
            élégance et savoir-faire pour sublimer vos espaces.
        </p>

    </div>
    <!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            @forelse($catalogues as $item)

                @foreach($item->images as $image)

                <div class="col-lg-4 col-md-6" data-aos="fade-up">

                    <div class="catalogue-image-box">

                        <a href="{{ asset('storage/' . $image) }}"
                           class="glightbox"
                           data-gallery="catalogue-gallery">

                            <img src="{{ asset('storage/' . $image) }}"
                                 class="img-fluid"
                                 alt="{{ $categorie }}">

                        </a>

                    </div>

                </div>

                @endforeach

            @empty

                <div class="col-12">

                    <div class="empty-catalogue text-center">

                        <i class="bi bi-image"></i>

                        <h4>Aucune réalisation disponible</h4>

                        <p>
                            Les créations de cette catégorie seront bientôt ajoutées.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>
<!-- /Catalogue Details Section -->

</main>

@endsection