<?php

namespace App\Models;
use App\Models\Resource\Messaggio;



class chat 
{
    public function ritornaTuttiMessaggi(){
       return Messaggio::all();
    }
    
    public function ritornaMessaggioMittente($id){
        return Messaggio::where('ID_mittente', $id)->get();
    }
    
    public function ritornaMessaggioDestinatario($id){
        return Messaggio::where('ID_destinatario', $id)->get();
    }
}
