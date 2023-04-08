<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        	'name' => 'User Biasa',
            'email' => 'user@gmail.com',
            'phone_number' => '081122223333',
            'province' => 'Jawa Barat',
            'city' => 'Bandung',
            'subdistrict' => 'Cibiru',
            'ward' => 'Cipadung',
            'zip' => '60614',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
        	'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
    }
}
