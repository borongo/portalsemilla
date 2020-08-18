<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_post
 * @property boolean $pin_post
 * @property boolean $like_post
 * @property string $created_at
 * @property string $updated_at
 * @property Post $post
 * @property User $user
 */
class Posts_user extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'posts_user';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'id_post', 'pin_post', 'like_post', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post', 'id_post');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
