<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesInsta extends Model
{
 protected $table="desafio_insta";
 protected $fillable=["id","id_user","link_insta","id_desafio"];
 public $timestamps=false;
}
