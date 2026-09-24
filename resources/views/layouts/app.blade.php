<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Ace_Arts & Déco') }}</title>

    <meta name="description"
          content="Ace_Arts & Déco - Création, décoration intérieure et aménagement d'espaces.">

    <meta name="keywords"
          content="Ace Arts, décoration, design intérieur, ameublement, artisanat">

    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link rel="icon"
          href="{{ asset('/img/logo.png') }}">

    <link rel="apple-touch-icon"
          href="{{ asset('/img/apple-touch-icon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet"
          href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}">

    <link rel="stylesheet"
          href="{{ asset('/vendor/aos/aos.css') }}">

    <link rel="stylesheet"
          href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet"
          href="{{ asset('/css/main.css') }}">

    @stack('styles')

</head>

<body>

    {{-- Navigation --}}
    @include('layouts.navigation')

    {{-- Header de page (optionnel) --}}
    @isset($header)
        <section class="page-header py-4 bg-light border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </section>
    @endisset

    {{-- Contenu principal --}}
    <main>

        {{ $slot }}

    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <!-- Scroll Top -->
<a href="#"
   id="scroll-top"
   class="scroll-top d-flex align-items-center justify-content-center">

    <i class="bi bi-arrow-up-short"></i>

</a>

@if(!auth()->check())
    <div id="preloader"></div>
@endif

    <!-- Vendor JS -->
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('/vendor/aos/aos.js') }}"></script>

    <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <script src="{{ asset('/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

    <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/js/main.js') }}"></script>

    @stack('scripts')

</body>

</html>