<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        //transaction_id es el id de la orden en stripe, eso al final
        $order->transaction_id = $request->transaction_id;
        $order->name = $request->name;
        $order->lastname = $request->lastname;
        $order->country = $request->country;
        $order->address = $request->address;
        $order->zip_code = $request->zip_code;
        $order->city = $request->city;
        $order->region = $request->region;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->total = $request->total;

        $order->save();

        dd($order);

        //Por ahora return al resultado de la compra con los datos del pedido
        return Inertia::render('successful-order', [
            'order' => $order
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function checkout(Artwork $artworks, $total)
    {
        //return Inertia::render('', [
        //    'artworks => $artworks,
        //    'total => $total
        //]);
    }
}
