<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm border-bottom">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center"
           href="{{ route('dashboard') }}">

            <img src="{{ asset('/img/logo.png') }}"
                 alt="Ace Arts & Déco"
                 width="50"
                 height="50"
                 class="me-3">

            <div>

                <div class="fw-bold text-warning">
                    Ace_Arts & Déco
                </div>

                <small class="text-light opacity-75">
                    Administration
                </small>

            </div>

        </a>

        <!-- Bouton mobile -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#adminNavbar"
                aria-controls="adminNavbar"
                aria-expanded="false"
                aria-label="Basculer la navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Navigation -->
        <div class="collapse navbar-collapse"
             id="adminNavbar">

        

            <!-- Utilisateur -->
            <ul class="navbar-nav ms-auto">

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle d-flex align-items-center"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        <i class="bi bi-person-circle me-2"></i>

                        {{ Auth::user()->name }}

                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow">

                        <li class="px-3 py-2 border-bottom">

                            <div class="fw-semibold">
                                {{ Auth::user()->name }}
                            </div>

                            <small class="text-muted">
                                {{ Auth::user()->email }}
                            </small>

                        </li>

                        <li>

                            <a class="dropdown-item"
                               href="{{ route('profile.edit') }}">

                                <i class="bi bi-person me-2"></i>
                                Mon profil

                            </a>

                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>

                            <form method="POST"
                                  action="{{ route('logout') }}">

                                @csrf

                                <button type="submit"
                                        class="dropdown-item">

                                    <i class="bi bi-box-arrow-right me-2"></i>
                                    Déconnexion

                                </button>

                            </form>

                        </li>

                    </ul>

                </li>

            </ul>

        </div>

    </div>

</nav>