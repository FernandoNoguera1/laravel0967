<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{ 
    
    use HasFactory;
    public function Coche()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');
       return $this->hasOne('App\Models\coche');
    }
}
