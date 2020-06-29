<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    //Relacion One To Many / De uno a muchos
    public function comments(){
        return $this->hasMany('App\Comment')->orderBy('id', 'desc');//Mediante el id de image que hay guardado en comentarios, me conseguira cuando yo llame este metodo el objeto del arrayt de objetos de lso comentarios
    }

    //Relacion One to Many / De uno a muchos
    public function likes(){
        return $this->hasMany('App\Like');
    }

    //Relacion de muchos a uno
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
