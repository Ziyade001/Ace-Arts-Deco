<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Ace_Arts & Déco') }}</title>

    <meta name="description"
          content="Ace_Arts & Déco - Espace d'administration">

    <meta name="keywords"
          content="Ace Arts, administration, gestion, décoration">

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

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Poppins:wght@300;400;500;600;700&display=swap"
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

<body class="auth-page">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-4 col-md-6">

                <div class="text-center mb-4">

                    <img src="{{ asset('/img/logo.png') }}"
                         alt="Ace Arts & Déco"
                         class="auth-logo mb-3">

                    <h2 class="text-white fw-bold">
                        Ace_Arts & Déco
                    </h2>

                    <p class="text-white-50">
                        Administration & Gestion
                    </p>

                </div>

                <div class="card auth-card">

                    <div class="card-body">

                        {{ $slot }}

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Vendor JS -->
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/vendor/aos/aos.js') }}"></script>

    <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/js/main.js') }}"></script>

    @stack('scripts')

</body>

</html>