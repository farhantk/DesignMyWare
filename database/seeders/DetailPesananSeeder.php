<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pesanan_details')->insert([
            'pesanan_id' => 1,
        	'jumlah_pesanan' => 2,
            'total_harga' => 200000,
            'product_id' => 1,
        ]);

        DB::table('pesanan_details')->insert([
            'pesanan_id' => 1,
        	'jumlah_pesanan' => 2,
            'total_harga' => 200000,
            'product_id' => 3,
        ]);

        DB::table('pesanan_details')->insert([
            'pesanan_id' => 1,
        	'jumlah_pesanan' => 5,
            'total_harga' => 200000,
            'product_id' => 5,
        ]);

        DB::table('pesanan_details')->insert([
            'pesanan_id' => 1,
        	'jumlah_pesanan' => 10,
            'total_harga' => 200000,
            'product_id' => 3,
        ]);

    }
}
