<?php

namespace App\Models;
use App\Models\Resevering;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films';
    protected $fillable = [
        'title',
        'beschrijving',
        'duur',
        'release_datum',
        'start_tijd',
        'leeftijdskeuring',
        'beschikbaarheid',
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class, 'film_id');
    }

    public function zalen()
    {
        return $this->belongsToMany(Zaal::class, 'film_zaal',
            'film_id', 'zaal_id');
    }

}
