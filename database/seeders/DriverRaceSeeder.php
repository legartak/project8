<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverRaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('driver_race')->insert([
            ['race_id' => 1, 'driver_id' => 1, 'points' => 5],
            ['race_id' => 1, 'driver_id' => 3, 'points' => 10],
            ['race_id' => 1, 'driver_id' => 4, 'points' => 9],
            ['race_id' => 1, 'driver_id' => 5, 'points' => 7],
            ['race_id' => 2, 'driver_id' => 2, 'points' => 7],
            ['race_id' => 2, 'driver_id' => 5, 'points' => 10],
            ['race_id' => 2, 'driver_id' => 6, 'points' => 6],
        ]);
    }
}
