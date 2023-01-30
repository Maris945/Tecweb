<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Associazione extends Model
{
    protected $table = 'associazione';
    protected $primaryKey = 'ID_associazione';
    public $timestamps = false;
}
