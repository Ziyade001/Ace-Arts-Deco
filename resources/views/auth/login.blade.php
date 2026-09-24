<x-guest-layout>

    {{-- Statut de session --}}
    <x-auth-session-status
        class="alert alert-success"
        :status="session('status')" />

    <div class="text-center mb-4">

    <h3 class="auth-title">
        Connexion
    </h3>

    <p class="auth-subtitle">
        Accédez à votre espace d'administration
    </p>

    </div>

    <form method="POST"
          action="{{ route('login') }}">

        @csrf

        {{-- Email --}}
        <div class="mb-3">

            <label for="email"
                   class="form-label">

                Adresse e-mail

            </label>

            <input id="email"
                   name="email"
                   type="email"
                   class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email') }}"
                   required
                   autofocus
                   autocomplete="username">

            @error('email')

                <div class="invalid-feedback">

                    {{ $message }}

                </div>

            @enderror

        </div>

        {{-- Mot de passe --}}
        <div class="mb-3">

            <label for="password"
                   class="form-label">

                Mot de passe

            </label>

            <input id="password"
                   name="password"
                   type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   required
                   autocomplete="current-password">

            @error('password')

                <div class="invalid-feedback">

                    {{ $message }}

                </div>

            @enderror

        </div>

        {{-- Se souvenir de moi --}}
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div class="form-check">

                <input class="form-check-input"
                       type="checkbox"
                       name="remember"
                       id="remember_me">

                <label class="form-check-label"
                       for="remember_me">

                    Se souvenir de moi

                </label>

            </div>

            @if(Route::has('password.request'))

                <a href="{{ route('password.request') }}"
                   class="text-decoration-none">

                    Mot de passe oublié ?

                </a>

            @endif

        </div>

        {{-- Bouton --}}
        <div class="d-grid">

            <button type="submit" class="btn btn-auth w-100">

                <i class="bi bi-box-arrow-in-right me-2"></i>

                 Se connecter

            </button>

        </div>

    </form>

</x-guest-layout>