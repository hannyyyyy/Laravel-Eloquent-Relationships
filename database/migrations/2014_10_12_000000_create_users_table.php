<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migration untuk membuat tabel "users".
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // Membuat kolom ID sebagai primary key dengan auto-increment
            $table->id();

            // Kolom untuk menyimpan nama pengguna
            $table->string('name');

            // Kolom untuk menyimpan email pengguna, harus unik
            $table->string('email')->unique();

            // Kolom untuk menyimpan waktu verifikasi email, bisa null jika belum diverifikasi
            $table->timestamp('email_verified_at')->nullable();

            // Kolom untuk menyimpan password pengguna
            $table->string('password');

            // Kolom untuk token "remember me" saat login
            $table->rememberToken();

            // Kolom timestamps otomatis (created_at & updated_at)
            $table->timestamps();
        });
    }

    /**
     * Membatalkan migration dengan menghapus tabel "users".
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
