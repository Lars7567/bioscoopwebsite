<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    protected $fillable = [
        'seat_number',
        'row_number',
        'is_booked',
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class , 'seat_id');
    }
}
