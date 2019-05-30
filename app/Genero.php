<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'genres';
    protected $primaryKey = 'id';

    public function nameComRanking() {
        return $this->name . '(' . $this->ranking . ')';
    }

    public function generoToFilmes () {
        return $this->hasMany(Filme::calss, 'genre_id', 'id');
    }
}
