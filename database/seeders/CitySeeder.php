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
        // add cities
        $city = [
            [
                'province_id' => 1,
                'name' => 'Dharan'
            ],
            [
                'province_id' => 1,
                'name' => 'Itahari'
            ]
        ];
        DB::table('cities')->insert($city);
    }
}
