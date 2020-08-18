<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $rut
 * @property string $school
 * @property string $instagram
 * @property string $name_avatar
 * @property string $img_avatar
 * @property string $avance
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Avance[] $avances
 * @property Comment[] $comments
 * @property PostsUser[] $postsUsers
 */
class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'rut', 'school', 'instagram', 'name_avatar', 'img_avatar', 'avance', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function avances()
    {
        return $this->hasMany('App\Models\Avance', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postsUsers()
    {
        return $this->hasMany('App\Models\PostsUser', 'id_user');
    }
    public function desafios(){
        return $this->belongsToMany('App\Models\Desafio','avance','id_user','id_desafio');
    }
}
