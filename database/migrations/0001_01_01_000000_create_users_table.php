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
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id', 16)->primary()->nullable(false);
            $table->string('user_nama', 50)->nullable(false);
            $table->string('user_alamat', 100)->nullable(false);
            $table->string('user_username', 50)->unique()->nullable(false);
            $table->string('user_email', 50)->unique()->nullable(false);
            $table->string('user_notelp', 15)->nullable(false);
            $table->string('user_password', 255)->nullable(false);
            $table->string('user_level', 20)->nullable(false);
            $table->string('user_pict_url', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
