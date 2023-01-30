<?php

namespace App\Models;

use App\Models\Resource\Gruppo;
use App\Models\Resource\Utenti;
use App\Models\Resource\Associazione;

class blogger 
{
    public function ritornaUserUsername($username){
        return Utenti::where('Username', $username)->get();
    }
    
    public function eliminaUtente($username) {
        Utenti::where('Username', $username)->delete();
        return true;
    }
    
    //ci va anche messo il model del gruppo?
}
