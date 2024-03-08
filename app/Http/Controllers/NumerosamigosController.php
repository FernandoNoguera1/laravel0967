<?php

namespace App\Http\Controllers;
use App\Models\numerosamigos;

use Illuminate\Http\Request;


class NumerosamigosController extends Controller
{
    public function numerosamigos(){
        return view('formularionumerosamigos');
    }
    public function ami(Request $request)
    {
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        if ($this->sonAmigos($numero1, $numero2)) {
            return "Los números $numero1 y $numero2 son amigos.";
        } else {
            return "Los números $numero1 y $numero2 no son amigos.";
        }
    }


    private function sonAmigos($numero1, $numero2)
    {
        $sumarDivisores = function ($numero) {
            $suma = 0;
            for ($i = 1; $i <= $numero / 2; $i++) {
                if ($numero % $i == 0) {
                    $suma += $i;
                }
            }
            return $suma;
        };

        if ($sumarDivisores($numero1) == $numero2 && $sumarDivisores($numero2) == $numero1) {
            return true;
        } else {
            return false;
    }

    }

}
