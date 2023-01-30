<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    
    protected $table = 'utenti';
    protected $primaryKey = 'Username';
    protected $keyType = 'string';


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nome', 'Cognome', 'email', 'password' ,'datebirth', 'luogonascita', 'indirizzo' , 'datamicizia', 'descrizione', 'accessoblog', 'amici', 'role', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'datebirth' => 'datetime',
    ];
    
    public function hasRole($tipo){
        $tipo = (array)$tipo;
        return in_array($this->Tipo, $tipo);
    }
    
    
}
