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
        	'jumlah_pesanan' => 2,
            'total_harga' => 200000,
            'nama' => 'budi',
            'nomor' => '08652123333',
            'product_id' => 1,
            'pesanan_id'=> 1,
            'status'=> 1
        ]);

        DB::table('pesanan_details')->insert([
        	'jumlah_pesanan' => 2,
            'total_harga' => 200000,
            'nama' => 'Reynhard',
            'nomor' => '085242159389',
            'product_id' => 3,
            'pesanan_id'=> 2,
            'status'=> 1
        ]);

        DB::table('pesanan_details')->insert([
        	'jumlah_pesanan' => 5,
            'total_harga' => 200000,
            'nama' => 'wahyu',
            'nomor' => '08654325711',
            'product_id' => 5,
            'pesanan_id'=> 3,
            'status'=> 1
        ]);

        DB::table('pesanan_details')->insert([
        	'jumlah_pesanan' => 10,
            'total_harga' => 200000,
            'nama' => 'Reynhard',
            'nomor' => '085242159389',
            'product_id' => 3,
            'pesanan_id'=> 4,
            'status'=> 1
        ]);

    }
}
