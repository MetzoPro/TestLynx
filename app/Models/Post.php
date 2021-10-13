<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{

    use HasFactory;

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    // Cette fonction prend en paramètre l'id du tag fourni à la commande et renvoie les contenus des posts correspondant à ce tag
    public function scopeGetPosts($query, $tagId){
        $req = $query->where('tag_id', $tagId)->get()->pluck('contenu');

        return $req;
    }

    protected $fillable = [
        'contenu'
    ];
}
