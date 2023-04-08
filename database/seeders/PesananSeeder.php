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
        	'kode_pesanan' => '12343211',
            'status' => '0',
            'user_id' => 1
        ]);

        DB::table('pesanans')->insert([
        	'kode_pesanan' => '1301204091',
            'status' => '0',
            'user_id' => 2
        ]);

        DB::table('pesanans')->insert([
        	'kode_pesanan' => '1233432112',
            'status' => '0',
            'user_id' => 3
        ]);

        DB::table('pesanans')->insert([
        	'kode_pesanan' => '1234533211',
            'status' => '0',
            'user_id' => 2
        ]);

    }
}
