<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class expeditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('expeditions')->insert([
        	'name' => 'jne'
        ]);
        DB::table('expeditions')->insert([
        	'name' => 'sicepat'
        ]);
        DB::table('expeditions')->insert([
        	'name' => 'jnt'
        ]);
    }
}
