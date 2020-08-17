<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="user";
    protected $fillable = [
        'name', 'email', 'password',"rut","school","name_avatar","img_avatar","instagram","avance"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','id_user'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post(){
       return $this->hasMany(Post::class,'id_post');
    }
    public function desafios(){
        return $this->belongsToMany(Desafio::class,'avance','id_user','id_desafio');
    }

}
