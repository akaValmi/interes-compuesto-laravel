<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InteresController extends Controller
{
    public function calcularInteres($capitalInicial, $tasaInteres, $plazo)
    {
    $capitalFinal = $capitalInicial * pow(1 + $tasaInteres, $plazo);
    return view('interes-compuesto', compact('capitalInicial', 'tasaInteres', 'plazo', 'capitalFinal'));
    }

    
}
