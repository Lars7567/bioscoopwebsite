<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';
    protected $fillable = [
        'title',
        'beschrijving',
        'duur',
        'release_datum',
        'leeftijdskeuring',
        'beschikbaarheid',
    ];
}
