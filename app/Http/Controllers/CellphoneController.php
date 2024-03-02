<?php

namespace App\Http\Controllers;

use App\Models\cellphone;
use Illuminate\Http\Request;

class CellphoneController extends Controller

{
    public function formularioCellphone(){

        return view('formularioCellphone');

     }



     public function cellphoneStore(Request $request){

        $producto = new cellphone();
        $producto->marca=$request->marca;
        $producto->precio=$request->precio;
        $producto->save();
        return $producto;
     }
}
