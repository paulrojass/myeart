<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;
use App\Models\ArtworkImage;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artworks = Artwork::where('seller_id', auth()->user()->seller->id)->with([
            'seller',
            'artworkImages',
            'elements',
            'comments',
            'likes'
        ])->get();

        // dd($artworks);

        return Inertia::render('artworks/Index', [
            'artworks' => $artworks
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $artworks = Artwork::query()->with([
            'seller',
            'artworkImages',
            'elements',
            'comments',
            'likes'
        ])->get();

        dd($artworks);

        return Inertia::render('artworks/Index', [
            'artworks' => $artworks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->with(['attributes', 'attributes.elements'])->get();

        // dd($categories);

        return Inertia::render('artworks/Create', [
            'categories' => $categories
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

        $artwork = Artwork::create([
            'seller_id' => auth()->user()->seller->id,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'offer' => $request->offer,
            'weight' => $request->weight,
            'width' => $request->width,
            'height' => $request->height
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $key => $image) {
                $destinationPath = 'artwork_images/';
                
                $format = $image->extension();

                $fileName = 'artwork'.$artwork->id.'.'.$format;
                $image->move($destinationPath, $fileName);

                $artwork_image = ArtworkImage::create([
                    'artwork_id' => $artwork->id,
                    'location'  => '/'.$destinationPath.$fileName,
                    'principal' => $key === 0 ? 1 : 0
                ]);
            }
        }
        return redirect()->route('my-artworks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $artwork = Artwork::where('id', $id)->with(['seller','artworkImages', 'elements', 'comments', 'likes'])->first();

        dd($artwork);

        //return response()->json(['artwork' => $artwork]);
        
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
        $artwork = Artwork::where('id', $id)->with('elements')->first();

        dd($artwork);

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
}
