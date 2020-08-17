<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desafio extends Model
{
    protected $table="desafio";
    protected $fillable=["id","nombre","tipo","n_desafio","n_cofre"];
    public $timestamps=false;
}
