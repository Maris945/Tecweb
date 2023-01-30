<?php

namespace App\Models;

use App\Models\Resource\Post;



class blog 
{
    
    public function ritornaTuttiPost(){
        return Post::all();
    }
    
    public function ritornaPostMittente($username) {
        return Post::where('ID_mittente', $username)->get();
    }
    
    public function ritornaPostDestinatari($username) {
        return Post::where('ID_destinatario', $username)->get();
    }
    
    public function deletePost($id) {
        Post::where('ID_post', $id)->delete();
    }
    
}
