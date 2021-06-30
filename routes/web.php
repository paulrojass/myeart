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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

//Laravel Socialite
Route::get('/redirect', [App\Http\Controllers\LoginWithFacebookController::class, 'redirectFacebook']);
Route::get('/callback', [App\Http\Controllers\LoginWithFacebookController::class, 'facebookCallback']);


//Vistas para home
//Seleccionar Aristista o Galeria:
Route::get('/vendedores/artista-galeria', [App\Http\Controllers\HomeController::class, 'selectArtistOrGallery'])
->name('artist-or-gallery');

//Rutas para los modelos
//Informacion de una Cuenta
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'cuenta'], function () {
    Route::get('editar', [App\Http\Controllers\UserController::class, 'editAccountInformation'])
    ->name('my-account.edit');
    Route::get('mis-obras', [App\Http\Controllers\ArtworkController::class, 'myArtworks'])
    ->name('my-account.artworks');
    Route::get('mis-compras', [App\Http\Controllers\BuyController::class, 'myShopping'])
    ->name('my-account.shopping');
    Route::get('mis-ventas', [App\Http\Controllers\BuyController::class, 'mySales'])
    ->name('my-account.shopping');
});


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

Route::group(['middleware' => ['web', 'auth', 'role:admin|operator'], 'prefix' => 'panel'], function () {
    //Usuarios:
    Route::resource(
        'usuarios',
        App\Http\Controllers\UserController::class,
        [ 'names' => [
            'index' => 'users.index',
            'create' => 'users.create',
            'show' => 'users.show',
            'store' => 'users.store',
            'edit' => 'users.edit',
            'update' => 'users.update',
            'destroy' => 'users.destroy'
            ]
        ]
    );

    //Tags de Vendedor:
    Route::resource(
        'tags',
        App\Http\Controllers\TagController::class,
        [ 'names' => [
            'index' => 'tags.index',
            'create' => 'tags.create',
            'store' => 'tags.store',
            'edit' => 'tags.edit',
            'update' => 'tags.update',
            'destroy' => 'tags.destroy'
            ]
        ]
    )->except(['show']);

    Route::group(['prefix' => 'categorias'], function () {
        //Categorias de las obras:
        Route::resource(
            '/',
            App\Http\Controllers\CategoryController::class,
            [ 'names' => [
                'index' => 'categories.index',
                'create' => 'categories.create',
                'show' => 'categories.show',
                'store' => 'categories.store',
                'edit' => 'categories.edit',
                'update' => 'categories.update',
                'destroy' => 'categories.destroy'
                ]
            ]
        );
        Route::get('{category_id}/atributos', [App\Http\Controllers\AttributeController::class, 'index'])
        ->name('attributes.index');

        Route::group(['prefix' => 'atributos'], function () {
            //Atributos de las categorias
            Route::resource(
                '/',
                App\Http\Controllers\AttributeController::class,
                [ 'names' => [
                    'create' => 'attributes.create',
                    'show' => 'attributes.show',
                    'store' => 'attributes.store',
                    'edit' => 'attributes.edit',
                    'update' => 'attributes.update',
                    'destroy' => 'attributes.destroy'
                    ]
                ]
            )->except(['index']);

            //Elementos de los atributos
            Route::get('{attribute_id}/elementos', [App\Http\Controllers\AttributeController::class, 'index'])
            ->name('elements.index');
            Route::resource(
                'elementos',
                App\Http\Controllers\ElementController::class,
                [ 'names' => [
                    'create' => 'elements.create',
                    'show' => 'elements.show',
                    'store' => 'elements.store',
                    'edit' => 'elements.edit',
                    'update' => 'elements.update',
                    'destroy' => 'elements.destroy'
                    ]
                ]
            );
        });
    });
});
