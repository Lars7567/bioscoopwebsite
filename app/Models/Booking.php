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
        'seat_id',
    ];

    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id');
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class , 'seat_id');
    }
}
