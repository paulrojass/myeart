<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function home()
    {
        return Inertia::render('Home');
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
