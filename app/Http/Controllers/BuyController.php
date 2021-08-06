<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;

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
        $artwork = Artwork::find($id);
        return Inertia::render('', [
            'artwork' => $artwork
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
        $artwork = Artwork::find($request->artwork_id);
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
        $order->save();

        return Inertia::render('vista de compra exitosa');
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
        $buy->finished = 1;
        $buy->save();
        /**
        * Luego debo agregar la funcion de stripe donde se libere el pago
        *
        *
        */
        return response()->json(['success' => 'Compra finalizada']);
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
