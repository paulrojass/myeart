<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Artist;
use App\Models\Artwork;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function home()
    {
        $artworks = Artwork::with(['artworkImages', 'seller.user'])->take(6)->get();
        $artists = Artist::latest()->with(['seller', 'seller.user', 'seller.user.profile'])->take(6)->get()->sortByDesc('created_at');
        $galleries = Gallery::latest()->with(['seller', 'seller.user', 'seller.user'])->take(6)->get();

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

    public function artist(Request $request)
    {
        $artist = Artist::where('id', $request->id)->with('seller.user.profile')->first();
        $artworks = Artwork::where('seller_id', $artist->seller->id)->with(['artworkImages', 'seller.user'])->take(6)->get();

        return Inertia::render('artists/Index', [
            'artist' => $artist,
            'artworks' => $artworks
        ]);
    }

    public function events()
    {
        return Inertia::render('events/Index');
    }

    public function selectArtistOrGallery()
    {
        return Inertia::render('users/ArtistOrGallery');
    }
}
