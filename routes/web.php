<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function(){
    return Inertia::render('Account/SalesHistory', []);
});

// Account

Route::get('/account/salesHistory', function(){
    return Inertia::render('Account/SalesHistory', []);
})->name('account-salesHistory');

Route::get('/account/shoppingHistory', function(){
    return Inertia::render('Account/ShoppingHistory', []);
})->name('account-shoppingHistory');

Route::get('/account/profile', function(){
    return Inertia::render('Account/Profile', []);
})->name('account-profile');

// Route::get('/account/shoppingHistory', function(){
//     return Inertia::render('Account/ShoppingHistory', []);
// })->name('account-worksArtist');

// Vista del pago
Route::get('/payment', function(){
    return Inertia::render('Checkout/index', []);
});

// Vista del autor (Public)
Route::get('/profileAuthor', function(){
    return Inertia::render('DetailsArtist/index', []);
})->middleware([])->name('profileAuthor');

// Vista detalles de la obra (Public)
Route::get('/detailsWorkArtist', function(){
    return Inertia::render('DetailsWorkArtist/index', []);
})->middleware([])->name('detailsWorkArtist');

// Vista Obras (Public)
Route::get('/search', function(){
    return Inertia::render('Search/index', []);
})->middleware([])->name('search');

// Vista Home 
Route::get('/', function () {
    return Inertia::render('Home/Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->middleware([])->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

//Laravel Socialite
Route::get('/redirect', [App\Http\Controllers\LoginWithFacebookController::class, 'redirectFacebook']);
Route::get('/callback', [App\Http\Controllers\LoginWithFacebookController::class, 'facebookCallback']);


//Rutas para los modelos
//Usuarios:
Route::resource(
    'usuarios',
    App\Http\Controllers\UserController::class,
    [ 'names' => [
        'index' => 'users.index',
        'show' => 'users.show',
        'edit' => 'users.edit',
        'update' => 'users.update',
        'destroy' => 'users.destroy'
        ]
    ]
)->except(['create', 'store']);

//Rutas para los modelos
//Usuarios:
Route::resource(
    'compradores',
    App\Http\Controllers\BuyerController::class,
    [ 'names' => [
        'index' => 'buyers.index',
        'create' => 'buyers.create',
        'show' => 'buyers.show',
        'store' => 'buyers.store',
        'edit' => 'buyers.edit',
        'update' => 'buyers.update',
        'destroy' => 'buyers.destroy'
        ]
    ]
);


//Seleccionar Aristista o Galeria:
Route::get('/vendedores/artista-galeria', [App\Http\Controllers\HomeController::class, 'selectArtistOrGallery'])
->name('artist-or-gallery');

Route::resource(
    'vendedores',
    App\Http\Controllers\SellerController::class,
    [ 'names' => [
        'index' => 'sellers.index',
        'create' => 'sellers.create',
        'show' => 'sellers.show',
        'store' => 'sellers.store',
        'edit' => 'sellers.edit',
        'update' => 'sellers.update',
        'destroy' => 'sellers.destroy'
        ]
    ]
);

//Artistas:
Route::resource(
    'artistas',
    App\Http\Controllers\ArtistController::class,
    [ 'names' => [
        'index' => 'artists.index',
        'create' => 'artists.create',
        'show' => 'artists.show',
        'store' => 'artists.store',
        'edit' => 'artists.edit',
        'update' => 'artists.update',
        'destroy' => 'artists.destroy'
        ]
    ]
);

//Galerias:
Route::resource(
    'galerias',
    App\Http\Controllers\GalleryController::class,
    [ 'names' => [
        'index' => 'galleries.index',
        'create' => 'galleries.create',
        'show' => 'galleries.show',
        'store' => 'galleries.store',
        'edit' => 'galleries.edit',
        'update' => 'galleries.update',
        'destroy' => 'galleries.destroy'
        ]
    ]
);
