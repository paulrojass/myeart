<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

use App\Models\Artwork;
use App\Models\Buy;
use App\Models\Seller;
use App\Models\Tag;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

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

        // dd($artists);

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

        // dd($artists);

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
            'tags' => $tags,
            'entity' => "artista"
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
        $seller->has_gallery = 0;
        $seller->save();

        //Se Asigna role de vendedor
        $user->assignRole('seller');

        //Creando datos artista del vendedor
        $artist = new Artist();
        $artist->seller_id = $seller->id;
        $artist->artistic_name = $request->artistic_name;
        $artist->save();

        foreach ($request->tags as $tag_id) {
            //reviso luego esta parte
            $seller->tags()->attach($tag_id);
        }

        return Redirect::route('account-profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::find($id)->with([
            'seller.user',
            'seller.user.profile',
            'seller.artworks',
            'seller.artworks.artworkImages',
            'seller.sales'
        ])->first();

        $popular_artworks = Artwork::where('seller_id', $artist->seller_id)
        ->withCount('likes')
        ->with(['likes', 'artworkImages', 'seller.user'])
        ->orderByDesc('likes_count')
        ->take(6)->get();

        $seller = $artist->seller;

        //$sales = $seller->artworks->buy;

        $sales = Buy::where('artwork_id', $seller->artworks->pluck('id'))->get();
        dd($sales);

        //dd($popular_artworks);

        //Aqui me falta agregar las resenas

        return Inertia::render('artists/Index', [
            'artist' => $artist,
            'popular_artworks' => $popular_artworks
        ]);
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
