<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class Post extends Model implements ViewableContract
{
    use Viewable;
    //
    protected $table = 'batch';
    protected $fillable = ['judul','slug', 'gambar', 'sinopsis','kategori','kategori_id'];

    public function tag(){
        return $this->hasOne('App\Tag');
    }
    public function view(){
        return $this->hasMany('\App\View');
    }
}
