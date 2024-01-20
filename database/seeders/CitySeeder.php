<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            ['name' => 'City 1', 'province_id' => 1],
            ['name' => 'City 2', 'province_id' => 1],
            ['name' => 'City 3', 'province_id' => 1],
            ['name' => 'City 4', 'province_id' => 1],
        ]);
    }
}
