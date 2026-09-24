<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index');
})->name('index');

Route::get('catalogues', [MainController::class, 'catalogues'])->name('catalogues');


Route::post('/contact', [ContactController::class, 'send'])
    ->name('emails.contact.send');

    
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard/catalogue/create', [CatalogueController::class, 'create'])
        ->name('catalogue.create');

    Route::post('/dashboard/catalogue/store', [CatalogueController::class, 'store'])
        ->name('catalogue.store');

});

Route::get('/catalogue/{categorie}', [CatalogueController::class, 'show'])
    ->name('catalogue.show');

require __DIR__.'/auth.php';
