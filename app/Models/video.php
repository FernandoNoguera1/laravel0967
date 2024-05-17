<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
         // Relacion Uno a Muchos
         public function user(){
            return $this->hasOne('App\Models\user');//RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO
        }
}
