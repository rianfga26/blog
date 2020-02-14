<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    //
    protected $table = 'views';

    public function post(){
        return $this->belongsTo('\App\Post');
    }
}

