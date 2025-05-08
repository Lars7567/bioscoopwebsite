<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolls = [
            [
                'roll_number' => 1,
                'name' => 'klant',
            ],
            [
                'roll_number' => 2,
                'name' => 'manager',
            ],
            [
                'roll_number' => 3,
                'name' => 'admin',
            ],
        ];

        DB::table('roll')->insert($rolls);
    }
}
