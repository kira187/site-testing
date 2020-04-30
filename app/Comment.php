<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    //Many to many
    public function user() {
        return $this->belongsTo('App/User');
    }

    //Many to many
    public function image() {
        return $this->belongsTo('App/Image');
    }
}
