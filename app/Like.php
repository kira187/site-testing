<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    //Many to many
    public function user() {
        return $this->belongsTo('App/User');
    }

    //Many to many
    public function image() {
        return $this->belongsTo('App/Image');
    }
}
