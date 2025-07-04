<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Lars Mooij',
            'email' => 'mooij.lars2005@gmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
        ]);
        $this->call([
            FilmSeeder::class,
            ZaalSeeder::class,
            RollSeeder::class,
            SeatSeeder::class,
            BookingSeeder::class,
            FilmZaalSeeder::class,
        ]);
    }
    
}
