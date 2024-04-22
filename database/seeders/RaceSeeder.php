<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('races')->insert([
            ['name' => 'Japanese GP', 'date' => '2024-04-07'],
            ['name' => 'Bahrain GP', 'date' => '2024-03-02'],
        ]);
    }
}
