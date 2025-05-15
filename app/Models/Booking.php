<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
        'film_title',
        'first_name',
        'last_name',
        'email',
        'phone',
        'time',
        'seats',
        'film_id',
    ];

    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
