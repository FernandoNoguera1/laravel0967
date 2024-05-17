<?php

namespace App\Http\Controllers;

use App\Models\coche;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        $temp = Coche::find(1);
        return $temp->Empleado;
    } 
}
