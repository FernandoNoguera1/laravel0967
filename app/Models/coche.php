<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coche extends Model
{
    public function Empleado()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');
       return $this->belongsTo('App\Models\empleado');
    }
    use HasFactory;
    
}

