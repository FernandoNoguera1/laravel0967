<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function profile(){
        //$profile = Profile::where('user_id',$this->id)->first();
        //$profile = Profile::where('foreing_key',$this->local_key)->first();
        //return $this->hasOne('App\Models\Profile','foreing_key','local_key');
        return $this->hasOne('App\Models\Profile'); }

        // Relacion Uno a Muchos
      public function posts(){
        return $this->hasMany('App\Models\posts');//RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO
        
    }
    public function videos(){
        return $this->hasMany('App\Models\user');//RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO
        
    }

    //Relacion muchos a muchos
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    /**
     * Los atributos asignables en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Los atributos que deben ocultarse para la serialización.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Los atributos que se deben emitir.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


}
