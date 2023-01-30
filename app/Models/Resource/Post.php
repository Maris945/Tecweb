<?php

namespace App\Models\Resource;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='faq';
    protected $primaryKey = 'ID_post';
    protected $guarded = ['ID_post'];
    public $timestamps = false;
}
