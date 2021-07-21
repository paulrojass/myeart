<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;
use App\Models\Artist;
use App\Models\Artwork;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function home()
    {
        $artworks = Artwork::all()->sortByDesc('created_at')->take(6);
        $artists = Artist::latest()->with(['seller', 'seller.user', 'seller.user.profile'])->take(6)->get();
        $galleries = Gallery::latest()->with(['seller', 'seller.user', 'seller.user.profile'])->take(6)->get();

        return Inertia::render('Home/Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'artworks' => $artworks,
            'artists' => $artists,
            'galleries' => $galleries,
        ]);

    }

    public function artworks()
    {
        return Inertia::render('artworks/Index');
    }

    public function artist()
    {
        return Inertia::render('artists/Index');
    }

    public function events()
    {
        return Inertia::render('events/Index');
    }

    public function selectArtistOrGallery()
    {
        return Inertia::render('home/ArtistOrGallery');
    }
}
