<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notices')->insert([
            [
                'title' => 'Notice 1',
                'description'=>'Description 1',
                'user_id' => 1
            ],
            [
                'title' => 'Notice 1',
                'description'=>'Description 1',
                'user_id' => 1
            ],
        ]);
    }
}
