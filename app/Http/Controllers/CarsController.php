<?php

namespace App\Http\Controllers;
use App\Models\cars;

use App\Models\Product;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function formularioCars(){

        return view('formularioCars');

     }



     public function productoStore(Request $request){

        $producto = new Cars();
        $producto->name=$request->name;
        $producto->price=$request->price;
        $producto->save();
        return $producto;
     }
}
