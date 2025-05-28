<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zaal extends Model
{
    protected $table = 'zalen';

    protected $fillable = [
        'zaal_nummer',
        'geluidsysteem',
        'scherm_type',
    ];

    public function films()
    {
        return $this->belongsToMany(Film::class, 'film_zaal',
            'zaal_id', 'film_id');
    }
}
