<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    // Cette fonction prend en paramètre l'id du tag fourni à la commande et renvoie les contenus des posts correspondant à ce tag
    public function scopeGetPosts($query, $tagId){
        return $query->where('tag_id', $tagId)->get()->pluck('contenu');
    }

    protected $fillable = [
        'contenu'
    ];
}