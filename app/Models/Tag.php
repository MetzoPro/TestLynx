<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Cette fonction récupère l'id du tag qui a été fourni dans la commande
    public function scopeGetTagId($query, $tag){
        return $query->where('tag', $tag)->get()->pluck('id');
    }

    protected $fillable = [
        'tag'
    ];

}
