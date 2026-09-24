<x-app-layout>

<x-slot name="header">

    <div>

        <h1 class="h3 fw-bold mb-2">
            Gestion du catalogue
        </h1>

        <p class="text-muted mb-0">
            Ajoutez et organisez les réalisations de Ace_Arts & Déco afin de mettre en valeur votre savoir-faire.
        </p>

    </div>

</x-slot>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            {{-- Message de succès --}}
            @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show mb-4"
                     role="alert">

                    <i class="bi bi-check-circle-fill me-2"></i>

                    {{ session('success') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Fermer">
                    </button>

                </div>

            @endif

            <div class="card dashboard-card">

                <div class="dashboard-card-header">

                    <h5>

                        <i class="bi bi-images me-2"></i>

                        Nouvelle réalisation

                    </h5>

                    <small>
                        Ajoutez une création au catalogue et enrichissez votre portfolio.
                    </small>

                </div>

                <div class="card-body">

                    <form method="POST"
                          action="{{ route('catalogue.store') }}"
                          enctype="multipart/form-data">

                        @csrf

                        {{-- Catégorie --}}
                        <div class="mb-4">

                            <label for="categorie"
                                   class="form-label">

                                Catégorie

                                <span class="required">*</span>

                            </label>

                            <select id="categorie"
                                    name="categorie"
                                    class="form-select @error('categorie') is-invalid @enderror">

                                <option value="">
                                    Sélectionnez une catégorie
                                </option>

                                <option value="Tables & Tablettes">Tables & Tablettes</option>
                                <option value="Miroirs">Miroirs</option>
                                <option value="Lits">Lits</option>
                                <option value="Consoles">Consoles</option>
                                <option value="Chaises">Chaises</option>
                                <option value="Canapés">Canapés</option>
                                <option value="Bureaux">Bureaux</option>
                                <option value="Comptoirs">Comptoirs</option>
                                <option value="Bar">Bar</option>
                                <option value="Design intérieur">Design intérieur</option>
                                <option value="Tableaux d’art">Tableaux d’art</option>
                                <option value="Placards">Placards</option>
                                <option value="Ustensiles cuisine">Ustensiles cuisine</option>
                                <option value="Personnalisation">Personnalisation</option>

                            </select>

                            @error('categorie')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        {{-- Images --}}
                        <div class="mb-4">

                            <label for="images"
                                   class="form-label">

                                Photos de la réalisation

                                <span class="required">*</span>

                            </label>

                            <input type="file"
                                   id="images"
                                   name="images[]"
                                   multiple
                                   accept="image/*"
                                   class="form-control @error('images') is-invalid @enderror">

                            <div class="form-text mt-2">

                                Formats acceptés : JPG, JPEG, PNG, WEBP.
                                Vous pouvez sélectionner plusieurs images simultanément.

                            </div>

                            @error('images')

                                <div class="invalid-feedback d-block">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>

                        <hr class="my-4">

                        {{-- Boutons --}}
                        <div class="d-flex justify-content-end gap-3">

                            <button type="reset"
                                    class="btn btn-light btn-reset">

                                <i class="bi bi-arrow-counterclockwise me-2"></i>

                                Réinitialiser

                            </button>

                            <button type="submit"
                                    class="btn btn-publish">

                                <i class="bi bi-cloud-arrow-up-fill me-2"></i>

                                Publier la réalisation

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


</x-app-layout>
