<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    //One To Many
    public function comments(){
        return $this->hasMany('App/Comment');
    }

    //One To Many
    public function likes(){
        return $this->hasMany('App/Like');
    }

    //Many to one
    public function user(){
        return $this->belongsTo('App/User');
    }
}
