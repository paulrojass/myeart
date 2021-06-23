<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function selectArtistOrGallery()
    {
        return Inertia::render('home/ArtistOrGallery');
    }
}
