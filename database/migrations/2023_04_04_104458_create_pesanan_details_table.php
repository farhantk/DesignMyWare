<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanan_details', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_pesanan');
            $table->integer('total_harga');
            $table->foreignId('product_id');
            $table->foreignId('pesanan_id');
            $table->foreignId('status')->default(0);
            $table->string('status_nego')->default("-");
            $table->integer('harga_nego')->default(0);
            $table->integer('harga')->default(0);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_details');
    }
};
