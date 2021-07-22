<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Artist;
use Inertia\Inertia;
use App\Models\Seller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::query()->with([
            'seller.user',
            'seller.user.profile',
            'seller',
            'seller.artworks'
        ])->get();

        dd($galleries);

        return Inertia::render('dashboard/galleries/Index', [
            'galleries' => $galleries
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $galleries = Gallery::query()->with([
            'seller.user',
            'seller.user.profile',
            'seller',
            'seller.artworks'
        ])->get();

        dd($galleries);

        return Inertia::render('galleries/Index', [
            'galleries' => $galleries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return Inertia::render('galleries/Create', [
            'tags' => $tags
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //El usuario autenticado se crea sus datos como artista
        $user = auth()->user();

        //Creando vendedor
        $seller = new Seller();
        $seller->user_id = $user->id;
        $seller->has_gallery = 1;
        $seller->save();

        //Se Asigna role de vendedor
        $user->assignRole('seller');

        //Creando datos artista del vendedor
        $artist = new Artist();
        $artist->seller_id = $seller->id;
        $artist->artistic_name = 'artistic_name';
        $artist->save();

        foreach ($request->tags as $tag) {
            //reviso luego esta parte
            $seller->tags()->attach($tag);
        }

        return Inertia::render('user/Profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
