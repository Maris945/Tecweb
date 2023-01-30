<?php

namespace App\Models\Resource;

use Illuminate\Database\Eloquent\Model;

class Messaggio extends Model
{
    protected $table = 'messaggio';
    protected $primaryKey = 'ID_messaggio';
    protected $guarded = ['ID_messaggio'];
    
    public $timestamps = false;
}
