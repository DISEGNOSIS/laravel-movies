<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function getName() {
        return $this->first_name . " " . $this->last_name;
    }

    public function movies() {
        return $this->belongsToMany(Movie::class, 'actor_movie', 'movie_id');
    }
}
