<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // add provinces
        $province = [
            [
                'name' => 'Koshi Province',
            ],
            [
                'name' => 'Province 2',
            ],
            [
                'name' => 'Province 3',
            ],
            [
                'name' => 'Province 4',
            ],
            [
                'name' => 'Province 5',
            ],
            [
                'name' => 'Province 6',
            ],
            [
                'name' => 'Province 7',
            ]
        ];

        DB::table('provinces')->insert($province);
    }
}
