<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $tipo
 * @property integer $n_desafio
 * @property integer $n_cofre
 * @property Avance[] $avances
 */
class Desafio extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'desafio';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'tipo', 'n_desafio', 'n_cofre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function avances()
    {
        return $this->hasMany('App\Models\Avance', 'id_desafio');
    }
}
