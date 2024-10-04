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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->string('pembelian_id', 16)->primary()->nullable(false);
            $table->string('user_id', 16)->nullable(false);
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('metode_pembayaran_id', 16)->nullable(false);
            $table->foreign('metode_pembayaran_id')->references('metode_pembayaran_id')->on('metode_pembayaran');
            $table->timestamp('pembelian_tanggal')->nullable(false);
            $table->decimal('pembelian_total', 10, 2)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
