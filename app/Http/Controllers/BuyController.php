<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;

use App\Models\Artwork;
use Inertia\Inertia;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $artwork = Artwork::where('id', $id)->with('artworkImages')->first();
        $discount_rate = 10;

        $amount = $artwork->offer ? $artwork->offer : $artwork->price;

        $total_amount = $amount - ($amount * $discount_rate)/100;
        return Inertia::render('buys/BuysIndex', [
            'artwork' => $artwork,
            'total_amount' => $total_amount
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
        $user = auth()->user();
        $artwork = Artwork::where('id', $request->artwork_id)->with('artworkImages')->first();
        if ($artwork->offer != null) {
            $total = $artwork->offer;
        } else {
            $total = $artwork->price;
        }
        $buy = new Buy;
        //transaction_id es el id de la orden en stripe, eso al final
        $buy->transaction_id = $request->transaction_id;
        $buy->user_id = $user->id;
        $buy->artwork_id = $request->artwork_id;
        $buy->name = $request->name;
        $buy->lastname = $request->lastname;
        $buy->country = $request->country;
        $buy->address = $request->address;
        $buy->zip_code = $request->zip_code;
        $buy->city = $request->city;
        $buy->region = $request->region;
        $buy->phone = $request->phone;
        $buy->email = $request->email;
        $buy->total = $total;
        $buy->save();

        $buy_details = [
                'greeting' => 'Has realizado una compra en Myeart',
                'body' => 'Tu compra de '.$artwork->name.' se ha realizado satisfactoriamente',
                'url' => 'mis-compras',
                //'thanks' => 'Thank you for visiting codechief.org!',
        ];

        $user->notify(new \App\Notifications\NewBuy($buy_details));

        $seller = $artwork->seller->user;
        $sale_details = [
                'greeting' => 'Han comprado una de tus obras de arte',
                'body' => 'Su obra '.$artwork->name.' ha sido comprada por el usuario '.$user->profile->firstName.' '.$user->profile->lastName,
                'url' => 'mis-ventas',
                //'thanks' => 'Thank you for visiting codechief.org!',
        ];
        $seller->notify(new \App\Notifications\NewSale($sale_details));
        return Inertia::render('buys/PurchaseSummary', [
            'artwork' => $artwork
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buy = Buy::find($id);

        return Inertia::render('vista donde se ve como va la compra', [
            'buy' => $buy
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buy = Buy::find($id);
        return Inertia::render('vista donde puede finalizar la obra si ya la obtuvo', [
            'buy' => $buy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**
        * Se actualiza el estatus de la compra
        * en este caso puede ser solo cambiar a estatus finished
        * si ya la recibio
        */
        $buy = Buy::find($id);
        $buy->comment = $request->comment;
        $buy->rating = $request->rating;
        $buy->finished = 1;
        $buy->save();

        return back();

        // return response()->json(['success' => 'Compra finalizada']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buy $buy)
    {
        //
    }
}
