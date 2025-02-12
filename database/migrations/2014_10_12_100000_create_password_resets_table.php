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
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        // Kode ini digunakan untuk membuat tabel password_resets yang menyimpan informasi reset password untuk pengguna.
        // Tabel ini memiliki kolom email, token, dan created_at, yang digunakan untuk menangani proses reset password.
        // Fungsi up() digunakan untuk membuat tabel, dan fungsi down() bisa digunakan untuk membalikkan perubahan tersebut.
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
};
