<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migration untuk membuat tabel "password_resets".
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            // Kolom email pengguna yang ingin mereset password
            // Ditandai sebagai index agar pencarian lebih cepat
            $table->string('email')->index();

            // Token unik untuk reset password
            $table->string('token');

            // Waktu ketika token dibuat, bisa null jika belum digunakan
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Membatalkan migration dengan menghapus tabel "password_resets".
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
};
