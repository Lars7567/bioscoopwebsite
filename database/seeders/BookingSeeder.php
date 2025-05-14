<?php

namespace Database\Seeders;

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
              
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'test@gmail.com',
                'phone' => '1234567890',
                'time' => '2023-10-01 14:00:00',
                'seats' => 2,
                'film_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more resevering records as needed
        ];
        
        DB::table('bookings')->insert($booking);
    }
}
