<?php

namespace App\Models\Resource;

use Illuminate\Database\Eloquent\Model;

class Gruppo extends Model
{
    protected $table = 'gruppo';
    protected $primaryKey = 'ID_gruppo';
    protected $guarded =  ['ID_gruppo'];
    public $timestamps = false;
}
