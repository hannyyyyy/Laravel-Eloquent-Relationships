<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        // Kode ini digunakan untuk membuat tabel users dengan kolom yang umum digunakan dalam sistem autentikasi pengguna di Laravel.
        // Menggunakan fungsi Schema::create() untuk mendefinisikan struktur tabel, dan $table->timestamps(), $table->rememberToken(), serta $table->string() untuk kolom-kolom yang relevan.
        // Fungsi up() akan mengeksekusi migrasi, sementara down() digunakan untuk membatalkan migrasi.
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
