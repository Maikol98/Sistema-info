<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reporteController extends Controller
{
    public function importReport()
    {
        $datos=DB::table('cliente')->get();
        $pdf=PDF::loadView('pdf.reporteventa',compact('datos'));
        return $pdf->download('Reporte.pdf');
    }
}
