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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('pesanan_id')->nullable();
            $table->foreignId('courier_id');
            $table->string('status');// [menunggu konfirmasi, diproses, dikirim, selesai]
            $table->string('receipt_code')->nullable();
            $table->string('paymentreceipt')->nullable();
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
