<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_user
 * @property int $id_desafio
 * @property string $urls
 * @property string $fecha
 */
class Insta_desafio extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'insta_desafio';

    /**
     * @var array
     */
    protected $fillable = ['id', 'id_user', 'id_desafio', 'urls', 'fecha'];

}
