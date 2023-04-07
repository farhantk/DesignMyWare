<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProdukSeeder extends Seeder
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
            'pesanan_id'=> 1
        ]);

        DB::table('pesanans')->insert([
        	'kode_pesanan' => '12343211',
            'status' => '0',
            'total_harga' => 200000,
            'kode_unik' => '086511',
            'user_id' => 1
        ]);

    }
}
