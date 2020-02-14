<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = ['tags', 'post_id'];
    protected $table = 'tags';

    public function posts(){
        return $this->belongsTo('App\Post');
    }
}
