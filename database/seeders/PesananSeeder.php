<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pesanans')->insert([
            'status' => '0',
            'user_id' => 1,
            'order_id' => 1,
            'pesanan_detail_id' => 1
        ]);
        DB::table('pesanans')->insert([
            'status' => '0',
            'user_id' => 1,
            'order_id' => 1,
            'pesanan_detail_id' => 2
        ]);
        DB::table('pesanans')->insert([
            'status' => '0',
            'user_id' => 1,
            'order_id' => 1,
            'pesanan_detail_id' => 3
        ]);
        DB::table('pesanans')->insert([
            'status' => '0',
            'user_id' => 1,
            'order_id' => 1,
            'pesanan_detail_id' => 4
        ]);
    }
}
