<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'user_id',
        'post_id',
        'fecha',
        'comentario',
    ];

    /**
     * Obtener el usuario que hizo el comentario.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Obtener el post al que pertenece el comentario.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}