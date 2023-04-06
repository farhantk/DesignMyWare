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
            'product id' => 1,
            'pesanan_id'=> 2
        ]);
    }
}
