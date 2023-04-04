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
        	'name' => 'CHELSEA 3RD 2018-2019',
            'desc' => 'ini produk 1 dengan nama CHELSEA 3RD 2018-201',
            'price' => 50000
        ]);

        DB::table('products')->insert([
        	'name' => 'LEICESTER CITY HOME 2018-2019',
            'desc' => 'ini produk 2 dengan nama LEICESTER CITY HOME 2018-2019',
            'price' => 70000
        ]);

        DB::table('products')->insert([
        	'name' => 'MAN. UNITED AWAY 2018-2019',
            'desc' => 'ini produk 3 dengan nama MAN. UNITED AWAY 2018-2019',
            'price' => 60000
        ]);

        DB::table('products')->insert([
        	'name' => 'LIVERPOOL AWAY 2018-2019',
            'desc' => 'ini produk 4 dengan nama LIVERPOOL AWAY 2018-2019',
            'price' => 60000
        ]);

        DB::table('products')->insert([
        	'name' => 'TOTTENHAM 3RD 2018-2019',
            'desc' => 'ini produk 5 dengan nama TOTTENHAM 3RD 2018-2019',
            'price' => 70000
        ]);

        DB::table('products')->insert([
        	'name' => 'DORTMUND AWAY 2018-2019',
            'desc' => 'ini produk 6 dengan nama DORTMUND AWAY 2018-2019',
            'price' => 80000
        ]);

        DB::table('products')->insert([
        	'name' => 'BAYERN MUNCHEN 3RD 2018 2019',
            'desc' => 'ini produk 5 dengan nama BAYERN MUNCHEN 3RD 2018 2019',
            'price' => 50000
        ]);

        DB::table('products')->insert([
        	'name' => 'JUVENTUS AWAY 2018-2019',
            'desc' => 'ini produk 5 dengan nama JUVENTUS AWAY 2018-2019',
            'price' => 60000
        ]);

        DB::table('products')->insert([
        	'name' => 'AS ROMA HOME 2018-2019',
            'desc' => 'ini produk 5 dengan nama AS ROMA HOME 2018-2019',
            'price' => 100000
        ]);

        DB::table('products')->insert([
        	'name' => 'AC MILAN HOME 2018 2019',
            'desc' => 'ini produk 5 dengan nama AC MILAN HOME 2018 2019',
            'price' => 30000
        ]);

        DB::table('products')->insert([
        	'name' => 'LAZIO HOME 2018-2019',
            'desc' => 'ini produk 5 dengan nama LAZIO HOME 2018-2019',
            'price' => 90000
        ]);

        DB::table('products')->insert([
        	'name' => 'REAL MADRID 3RD 2018-2019',
            'desc' => 'ini produk 5 dengan nama MADRID 3RD 2018-2019',
            'price' => 60000
        ]);
    }
}
