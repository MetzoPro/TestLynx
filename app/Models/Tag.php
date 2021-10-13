<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Cette fonction récupère l'id du tag qui a été fourni dans la commande
    public function scopeGetTagId($query, $tag){
        $req = $query->where('tag', $tag)->get()->pluck('id');

        return $req;
    }

    public function scopeGetnbTags($query){
        return $query->count();
    }

    protected $fillable = [
        'tag'
    ];

}
