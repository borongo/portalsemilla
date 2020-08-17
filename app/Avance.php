<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{
    protected $table="avance";
    protected $fillable=["id_avance","id_user","id_desafio"];
protected $primaryKey="id_avance";


    public function users(){
        return $this->hasMany(User::class);
    }
    public function desafios(){
        return $this->hasMany(Desafio::class);
    }
}
