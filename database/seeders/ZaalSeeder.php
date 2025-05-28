<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZaalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zalen')->insert([
            ['zaal_nummer' => 1, 'geluidsysteem' => 'Dolby Surround', 'scherm_type' => 'LED'],
            ['zaal_nummer' => 2, 'geluidsysteem' => 'Dolby Atmos', 'scherm_type' => 'OLED'],
            ['zaal_nummer' => 3, 'geluidsysteem' => 'Stereo', 'scherm_type' => 'LCD'],
            ['zaal_nummer' => 4, 'geluidsysteem' => 'Surround Sound', 'scherm_type' => '4K UHD'],
        ]);
    }
}
