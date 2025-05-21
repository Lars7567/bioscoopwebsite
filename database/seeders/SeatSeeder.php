<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Seat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seats = [
            // Row A
            ['seat_number' => 'A1', 'row_number' => '1'],
            ['seat_number' => 'A2', 'row_number' => '1'],
            ['seat_number' => 'A3', 'row_number' => '1'],
            ['seat_number' => 'A4', 'row_number' => '1'],
            ['seat_number' => 'A5', 'row_number' => '1'],
            ['seat_number' => 'A6', 'row_number' => '1'],
            ['seat_number' => 'A7', 'row_number' => '1'],
            ['seat_number' => 'A8', 'row_number' => '1'],
            ['seat_number' => 'A9', 'row_number' => '1'],
            ['seat_number' => 'A10', 'row_number' => '1'],
            // Row B
            ['seat_number' => 'B1', 'row_number' => '2'],
            ['seat_number' => 'B2', 'row_number' => '2'],
            ['seat_number' => 'B3', 'row_number' => '2'],
            ['seat_number' => 'B4', 'row_number' => '2'],
            ['seat_number' => 'B5', 'row_number' => '2'],
            ['seat_number' => 'B6', 'row_number' => '2'],
            ['seat_number' => 'B7', 'row_number' => '2'],
            ['seat_number' => 'B8', 'row_number' => '2'],
            ['seat_number' => 'B9', 'row_number' => '2'],
            ['seat_number' => 'B10', 'row_number' => '2'],
            // Row C
            ['seat_number' => 'C1', 'row_number' => '3'],
            ['seat_number' => 'C2', 'row_number' => '3'],
            ['seat_number' => 'C3', 'row_number' => '3'],
            ['seat_number' => 'C4', 'row_number' => '3'],
            ['seat_number' => 'C5', 'row_number' => '3'],
            ['seat_number' => 'C6', 'row_number' => '3'],
            ['seat_number' => 'C7', 'row_number' => '3'],
            ['seat_number' => 'C8', 'row_number' => '3'],
            ['seat_number' => 'C9', 'row_number' => '3'],
            ['seat_number' => 'C10', 'row_number' => '3'],
            // Row D
            ['seat_number' => 'D1', 'row_number' => '4'],
            ['seat_number' => 'D2', 'row_number' => '4'],
            ['seat_number' => 'D3', 'row_number' => '4'],
            ['seat_number' => 'D4', 'row_number' => '4'],
            ['seat_number' => 'D5', 'row_number' => '4'],
            ['seat_number' => 'D6', 'row_number' => '4'],
            ['seat_number' => 'D7', 'row_number' => '4'],
            ['seat_number' => 'D8', 'row_number' => '4'],
            ['seat_number' => 'D9', 'row_number' => '4'],
            ['seat_number' => 'D10', 'row_number' => '4'],
            // Row E
            ['seat_number' => 'E1', 'row_number' => '5'],
            ['seat_number' => 'E2', 'row_number' => '5'],
            ['seat_number' => 'E3', 'row_number' => '5'],
            ['seat_number' => 'E4', 'row_number' => '5'],
            ['seat_number' => 'E5', 'row_number' => '5'],
            ['seat_number' => 'E6', 'row_number' => '5'],
            ['seat_number' => 'E7', 'row_number' => '5'],
            ['seat_number' => 'E8', 'row_number' => '5'],
            ['seat_number' => 'E9', 'row_number' => '5'],
            ['seat_number' => 'E10', 'row_number' => '5'],
        ];

        foreach ($seats as &$seat) {
            $seat['is_booked'] = false;
        }
        unset($seat);

        DB::table('seats')->insert($seats);
    }
}
