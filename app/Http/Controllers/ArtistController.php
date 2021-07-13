<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

use Inertia\Inertia;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::query()->with(['seller', 'seller.user', 'seller.user.profile'])->get();

        dd($artists);

        return Inertia::render('dasboard/artists/Index', [
            'artists' => $artists
        ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $artists = Artist::query()->with(['seller', 'seller.user', 'seller.user.profile'])->get();

        dd($artists);

        return Inertia::render('artists/Index', [
            'artists' => $artists
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
        return Inertia::render('artists/Create', [
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
        $seller->user_id = $user_id;
        $seller->gallery = 0;
        $seller->save();

        //Se Asigna role de vendedor
        $user->assignRole('seller');

        //Creando datos artista del vendedor
        $artist = new Artist();
        $artist->seller_id = $seller->id;
        $artist->artistic_name = 'artistic_name';
        $artist->save();

        foreach ($request->tags as $tag_id) {
            //reviso luego esta parte
            $seller->tags->attach($tag_id, ['seller_id', $seller->id ]);
        }

        return Inertia::render('user/Profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        //
    }
}
