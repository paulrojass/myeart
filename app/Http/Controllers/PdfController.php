<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buy;

use Barryvdh\DomPDF\Facade as PDF;
use App;

class PdfController extends Controller
{
    public function certificate($id)
    {
        $buy = Buy::find($id);

        $artwork = $buy->artwork;
        $buyer = $buy->user;
        $seller = $artwork->seller;

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
        return $pdf->download('certificado.pdf');
        return back();
    }
}
