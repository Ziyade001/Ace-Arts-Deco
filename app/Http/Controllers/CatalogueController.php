<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    /**
     * Afficher le formulaire
     */
    public function create()
    {
        return view('dashboard.catalogue.create');
    }

    /**
     * Enregistrer les images
     */
    public function store(Request $request)
    {
        $request->validate([

            'categorie' => 'required|string',

            'images' => 'required',

            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:5048'

        ]);

        $images = [];

        // upload multiple
        foreach ($request->file('images') as $image) {

            $path = $image->store('catalogue', 'public');

            $images[] = $path;
        }

        Catalogue::create([

            'categorie' => $request->categorie,

            'images' => $images

        ]);

        return back()->with('success', 'Images ajoutées au catalogue avec succès.');
    }

    public function show($categorie)
    {
        $catalogues = Catalogue::where('categorie', $categorie)->latest()->get();

        return view('catalogue.show', compact('catalogues', 'categorie'));
    }
}