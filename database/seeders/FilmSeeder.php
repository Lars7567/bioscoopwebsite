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
                'title' => 'Film 1',
                'description' => 'Beschrijving van film 1',
                'duration' => '120',
                'release_date' => '2023-01-01',
                'age_rating' => 12,
                'availability' => 1,
            ],
            [
                'title' => 'Film 2',
                'description' => 'Beschrijving van film 2',
                'duration' => '90',
                'release_date' => '2023-02-01',
                'age_rating' => 16,
                'availability' => 0,
            ],
        ];

        DB::table('films')->insert($films);

    }
}
