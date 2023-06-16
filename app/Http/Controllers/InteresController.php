<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InteresController extends Controller
{
    public function calcularInteres($capitalInicial, $tasaInteres, $plazo)
    {
        $data = [];
        $capitalFinal = $capitalInicial;

        for ($i = 1; $i <= $plazo; $i++) {
            $capitalFinal *= (1 + $tasaInteres);
            $data[] = [
                'anyo' => $i, 'capital' => $capitalFinal
            ];
        }

        return view('interes-compuesto', compact('capitalInicial', 'tasaInteres', 'plazo', 'data'));
    }
}

