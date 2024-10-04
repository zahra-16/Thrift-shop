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
        Schema::create('pembelian_detail', function (Blueprint $table) {
            $table->string('pembelian_detail_id', 16)->primary()->nullable(false);
            $table->string('pembelian_id', 16)->nullable(false);
            $table->foreign('pembelian_id')->references('pembelian_id')->on('pembelian');
            $table->string('pakaian_id', 16)->nullable(false);
            $table->foreign('pakaian_id')->references('pakaian_id')->on('pakaian');
            $table->integer('jumlah')->nullable(false);
            $table->decimal('harga', 8, 2)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_detail');
    }
};
