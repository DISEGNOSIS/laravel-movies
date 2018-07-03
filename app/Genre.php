<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // si querés usar tus propios nombres en los modelos
    //protected $table = "genres";

    public function movies() {
        return $this->hasMany(Movie::class, 'genre_id', 'id');
    }
}
