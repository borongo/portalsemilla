<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsUser extends Model
{
    protected $table="posts_user";
    protected $fillable=['id_user','id_post','pin_post','like_user'];
}
