<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
        	'name' => 'Baju',
            'desc' => 'ini produk 1 dengan nama CHELSEA 3RD 2018-201',
            'price' => 50000
        ]);

        DB::table('products')->insert([
        	'name' => 'Jaket',
            'desc' => 'ini produk 2 dengan nama LEICESTER CITY HOME 2018-2019',
            'price' => 70000
        ]);

        DB::table('products')->insert([
        	'name' => 'PDH',
            'desc' => 'ini produk 3 dengan nama MAN. UNITED AWAY 2018-2019',
            'price' => 60000
        ]);

        DB::table('products')->insert([
        	'name' => 'PDH',
            'desc' => 'ini produk 4 dengan nama LIVERPOOL AWAY 2018-2019',
            'price' => 60000
        ]);

        DB::table('products')->insert([
        	'name' => 'Jaket',
            'desc' => 'ini produk 5 dengan nama TOTTENHAM 3RD 2018-2019',
            'price' => 70000
        ]);
    }
}
