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
        Schema::create('tb_pembayaran', function (Blueprint $table) {
            $table->string('id_pembayaran', 10)->primary();
            $table->string('id_order', 10);
            $table->foreing('id_order')->references('id_order')->on('tb_order');
            $table->enum('metode', ['cash', 'transfer', 'qris']);
            $table->decimal('jumalah', 15, 2);
            $table->string('bukti_transfer')->nullable();
            $table->datetime('tanggal_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pembayaran');
    }
};
