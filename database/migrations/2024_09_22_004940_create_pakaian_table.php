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
        Schema::create('pakaian', function (Blueprint $table) {
            $table->string('pakaian_id', 16)->primary()->nullable(false);
            $table->string('pakaian_nama', 50)->nullable(false);
            $table->string('kategori_id', 16)->nullable(false);
            $table->foreign('kategori_id')->references('kategori_id')->on('kategori_pakaian');
            $table->decimal('pakaian_harga', 8, 2)->nullable(false);
            $table->integer('pakaian_stok')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakaian');
    }
};
