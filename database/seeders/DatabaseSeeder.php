<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\expeditionSeeder;
use Database\Seeders\PesananSeeder;
use Database\Seeders\DetailPesananSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\orderSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(expeditionSeeder::class);
        $this->call(PesananSeeder::class);
        $this->call(DetailPesananSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(orderSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
