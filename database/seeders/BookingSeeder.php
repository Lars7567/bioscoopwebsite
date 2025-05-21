<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $booking = [
            [
              
                'name' => 'John Doe',
                'email' => 'test@gmail.com',
                'phone' => '1234567890',
                'time' => '2023-10-01 14:00:00',
                'film_id' => 1,
                'seat_id' => 1,
          
            ],
            // Add more resevering records as needed
        ];
        
        Booking::insert($booking);
    }
}
