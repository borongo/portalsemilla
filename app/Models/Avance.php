<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_avance
 * @property integer $id_user
 * @property integer $id_desafio
 * @property string $created_at
 * @property string $updated_at
 * @property Desafio $desafio
 * @property User $user
 */
class Avance extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'avance';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_avance';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'id_desafio', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function desafio()
    {
        return $this->belongsTo('App\Models\Desafio', 'id_desafio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
