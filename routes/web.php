<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return Inertia::render('Auth/VerifyEmail', []);
});

// Account

Route::get('/account/salesHistory', function(){
    return Inertia::render('Account/SalesHistory', []);
})->name('account-salesHistory');

Route::get('/account/shoppingHistory', function(){
    return Inertia::render('Account/ShoppingHistory', []);
})->name('account-shoppingHistory');

// Route::get('/account/profile', function(){
//     return Inertia::render('Account/Profile', []);
// })->name('account-profile');

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

// Vista Obras (Public) Editada (Paul)
Route::get('/search', [App\Http\Controllers\ArtworkController::class, 'list'])->middleware([])->name('search');

// Vista  Home , Editada Paul
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->middleware([])->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

//Laravel Socialite
Route::get('/redirect', [App\Http\Controllers\LoginWithFacebookController::class, 'redirectFacebook']);
Route::get('/callback', [App\Http\Controllers\LoginWithFacebookController::class, 'facebookCallback']);


//Vistas para home
//Seleccionar Aristista o Galeria:
Route::get('/artista-o-galeria', [App\Http\Controllers\HomeController::class, 'selectArtistOrGallery'])
->name('artist-or-gallery');

//Listados de vendedores (artistas y galerias)
Route::get('vendedores', [App\Http\Controllers\SellerController::class, 'list'])->name('sellers.index');
Route::get('vendedores/{id}', [App\Http\Controllers\SellerController::class, 'show'])->name('sellers.show');
Route::get('vendedores/artistas', [App\Http\Controllers\ArtistController::class, 'list'])->name('artists.index');
Route::get('vendedores/galerias', [App\Http\Controllers\GalleryController::class, 'list'])->name('galleries.index');

//Informacion de una Cuenta
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'cuenta'], function () {
    Route::get('editar', [App\Http\Controllers\UserController::class, 'editAccountInformation'])
    ->name('account-profile');
    Route::get('mis-compras', [App\Http\Controllers\UserController::class, 'myShopping'])
    ->name('my-account.shopping');
    Route::get('mis-ventas', [App\Http\Controllers\SellerController::class, 'mySales'])
    ->name('my-account.shopping');

    //Obras del usuario
    Route::group(['prefix' => 'mis-obras'], function () {
        //Obras de arte del usuario autenticado
        Route::resource(
            '/',
            App\Http\Controllers\ArtworkController::class,
            [ 'names' => [
                'index' => 'my-artworks.index',
                'create' => 'my-artworks.create',
                'store' => 'my-artworks.store',
                'show' => 'my-artworks.show',
                'edit' => 'my-artworks.edit',
                'update' => 'my-artworks.update',
                'destroy' => 'my-artworks.destroy'
                ]
            ]
        );
        //Comentarios de las obras de arte del usuario autenticado
        Route::resource(
            'comentarios',
            App\Http\Controllers\ArtworkController::class,
            [ 'names' => [
                'store' => 'comments.store',
                'update' => 'comments.update',
                'destroy' => 'comments.destroy'
                ]
            ]
        )->except(['index', 'show', 'create', 'edit']);

        //Likes de las obras de arte del usuario autenticado
        Route::resource(
            'likes',
            App\Http\Controllers\LikeController::class,
            [ 'names' => [
                'store' => 'likes.store',
                'destroy' => 'likes.destroy'
                ]
            ]
        )->except(['index', 'show', 'updates', 'create', 'edit']);
    });

    //Perfil de Usuario
    //Usuario se puede actualizar y eliminar
    Route::resource(
        'usuario',
        App\Http\Controllers\UserController::class,
        [ 'names' => [
            'update' => 'users.update',
            'destroy' => 'users.destroy'
            ]
        ]
    )->except(['index','create', 'store','show', 'edit']);
    //Usuario como vendedor solo se puede eliminar
    Route::delete('vendedor/{id}', [App\Http\Controllers\SellerController::class, 'destroy'])->name('sellers.destroy');
    //Usuario se crea como vendedor galeria, guardarse, actualizar sus datos y eliminarse como galeria
    Route::resource(
        'vendedor/galeria',
        App\Http\Controllers\GalleryController::class,
        [ 'names' => [
            'create' => 'galleries.create',
            'store' => 'galleries.store',
            'edit' => 'galleries.edit',
            'update' => 'galleries.update',
            'destroy' => 'galleries.destroy'
            ]
        ]
    )->except(['index', 'show']);

    //Usuario se crea como vendedor artista, guardarse, actualizar sus datos y eliminarse como artista
    Route::resource(
        'vendedor/artista',
        App\Http\Controllers\ArtistController::class,
        [ 'names' => [
            'create' => 'artists.create',
            'store' => 'artists.store',
            'edit' => 'artists.edit',
            'update' => 'artists.update',
            'destroy' => 'artists.destroy'
            ]
        ]
    )->except(['index', 'show']);
});

//Rutas del panel administrativo
Route::group(['middleware' => ['web', 'auth', 'role:admin|operator'], 'prefix' => 'panel'], function () {
    //Usuarios: un administrador puede crear visualizar usuarios, crearlos, y eliminarlos
    Route::resource(
        'usuarios',
        App\Http\Controllers\UserController::class,
        [ 'names' => [
            'index' => 'users.index',
            'create' => 'users.create',
            'show' => 'users.show',
            'store' => 'users.store',
            'destroy' => 'users.destroy'
            ]
        ]
    )->except(['edit', 'update']);

    //Tags de Vendedor: un administrador puede crear, visualizar, actualizar y eliminar Tags
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
        //Categorias de las obras: un administrador puede crear, visualizar, actualizar y eliminar categorias

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
