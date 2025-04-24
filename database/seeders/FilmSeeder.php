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
                'beschrijving' => 'Beschrijving van film 1',
                'duur' => '120 minuten',
                'release_datum' => '2023-01-01',
                'leeftijdskeuring' => 12,
                'beschikbaarheid' => 1,
            ],
            [
                'title' => 'Film 2',
                'beschrijving' => 'Beschrijving van film 2',
                'duur' => '90 minuten',
                'release_datum' => '2023-02-01',
                'leeftijdskeuring' => 16,
                'beschikbaarheid' => 0,
            ],
        ];

        DB::table('film')->insert($films);

    }
}
