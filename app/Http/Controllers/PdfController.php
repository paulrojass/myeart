<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buy;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade as PDF;
//use App;

class PdfController extends Controller
{
    public function certificate($id)
    {
        $buy = Buy::find($id);


        $artwork = $buy->artwork;
        $buyer = $buy->user;
        $seller = $artwork->seller;
        $artworkImage = $artwork->artworkImages->first();
        $image_location = $artworkImage->location;

         // share data to view
         $data = [

             'title' => 'Welcome to ItSolutionStuff.com',

             'date' => date('m/d/Y'),

             'buy' => $buy,

             'image_location' => $image_location

         ];



        $pdf = PDF::loadView('certificate', $data);


        $pdf->setOptions(['javascript-delay' => 3000]);

        return $pdf->download('Certificado_'.Str::replace(' ', '_', $artwork->name).'.pdf');

    }
}
