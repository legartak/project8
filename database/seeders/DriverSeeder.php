<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drivers')->insert([
            ['name' => 'Charles Leclerc', 'country' => 'Monaco', 'team_id' => 1, 'age' => 26, 'image' => "https://upload.wikimedia.org/wikipedia/commons/9/91/Charles-Leclerc_%28cropped_1%29.jpg"],
            ['name' => 'Carlos Sainz Jr.', 'country' => 'Spain', 'team_id' => 1, 'age' => 29, 'image' => "https://upload.wikimedia.org/wikipedia/commons/f/f9/Formula1Gabelhofen2022_%2804%29_%28cropped%29.jpg"],
            ['name' => 'Lewis Hamilton', 'country' => 'England', 'team_id' => 2, 'age' => 39, 'image' => "https://upload.wikimedia.org/wikipedia/commons/a/ac/Lewis_Hamilton_2022_S%C3%A3o_Paulo_Grand_Prix_%2852498120773%29_%28cropped%29.jpg"],
            ['name' => 'George Russell', 'country' => 'England', 'team_id' => 2, 'age' => 26, 'image' => "https://upload.wikimedia.org/wikipedia/commons/f/ff/George_Russell%2C_British_GP_2022_%2852381430692%29_%28cropped%29.jpg"],
            ['name' => 'Fernando Alonso', 'country' => 'Spain', 'team_id' => 3, 'age' => 42, 'image' => "https://upload.wikimedia.org/wikipedia/commons/0/0f/Fernando_Alonso_NASCAR_Media_Tour_2018.jpg"],
            ['name' => 'Lance Stroll', 'country' => 'Canada', 'team_id' => 3, 'age' => 25, 'image' => "https://upload.wikimedia.org/wikipedia/commons/a/a4/FIA_F1_Austria_2022_Lance_Stroll_%28cropped_2%29.jpg"],
        ]);
    }
}
