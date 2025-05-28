<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilmZaal extends Model
{
    protected $table = 'film_zaal';

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function zaal()
    {
        return $this->belongsTo(Zaal::class);
    }

}
