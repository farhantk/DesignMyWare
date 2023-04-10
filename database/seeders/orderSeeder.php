<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
        	'user_id' => 1,
        	'pesanan_id' => 1,
            'courier_id'=>1,
            'status'=>'Menunggu konfirmasi',
            'paymentreceipt'=>'post-image/default.jpeg'
        ]);
    }
}
