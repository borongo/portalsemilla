<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $table="post";
    protected $fillable=["id","id_user","likes","body","title"];

    public function author(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'id_post');
    }
    public function pined(){
        return $this->belongsToMany(User::class,'posts_user','id_post','id_user');

    }

}
