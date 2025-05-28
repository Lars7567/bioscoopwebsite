<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = [
            [
                'title' => 'hidden gem',
                'description' => 'Beschrijving van hidden gem film',
                'duration' => '120',
                'release_date' => '2023-01-01',
                'StartTime' => '2023-01-01 18:00:00',
                'age_rating' => 12,
                'availability' => 1,
            ],
            [
                'title' => 'nazi gory',
                'description' => 'Beschrijving van nasi gory film',
                'duration' => '90',
                'release_date' => '2023-02-01',
                'StartTime' => '2023-02-01 20:00:00',
                'age_rating' => 16,
                'availability' => 0,
            ],
        ];

        DB::table('films')->insert($films);

    }
}
