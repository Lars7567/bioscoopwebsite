<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmZaalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filmzaal = [
            [
                'film_id' => 1,
                'zaal_id' => 1,
            ],
            [
                'film_id' => 2,
                'zaal_id' => 2,
            ],
        ];
        DB::table('film_zaal')->insert($filmzaal);

    }
}
