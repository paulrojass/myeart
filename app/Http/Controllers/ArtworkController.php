<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('artworks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('artworks/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artwork = Artwork::create([
            'seller_id' => auth()->user()->seller->id,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'offer' => $request->offer,
            'weight' => $request->weight,
            'width' => $reqest->width,
            'height' => $request->height
        ]);


        if($request->hasFile('image')) {
            foreach($request->file('image') as $image) {
                $destinationPath = 'artwork_images/';
                $fileName = Str::random(15).'.'.$format;
                $image->move($destinationPath, $filename);

                $artwork_image = Artwork::create([
                    'artwork_id' => $artwork->id,
                    'location'  => $filename
                ]);
            }
        }

        return redirect()->route('artworks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $artwork = query('id', $id)->with('artworkImages')->first();

        $seller = $artwork->seller->with('user')->with('user.profile')->first();

        return Inertia::render('artworks/Show', [
            'artwork' => $artwork,
            'seller' => $seller
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artwork = Artwork::find($id);

        return Inertia::render('artworks/Edit', [
            'artwork' => $artwork
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artwork = Artwork::find($id);

        $artwork->update($request->all());

        return redirect()->route('my-account.artworks');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artwork = Artwork::find($id);

        $artwork->delete();

        return redirect()->route('my-account.artworks');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myArtworks()
    {
        return Inertia::render('artworks/MyArtworks');
    }
}
