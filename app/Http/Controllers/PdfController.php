<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buy;

use Barryvdh\DomPDF\Facade as PDF;

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
        return $pdf->download('certificado.pdf');
    }
}
