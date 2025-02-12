<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel pivot 'user_role'.
     *
     * @return void
     */
    public function up()
    {
        // Membuat tabel pivot 'user_role' untuk menghubungkan pengguna dengan peran (many-to-many)
        Schema::create('user_role', function (Blueprint $table) {
            // Menambahkan kolom 'user_id' untuk menyimpan ID pengguna
            $table->unsignedBigInteger('user_id');

            // Menambahkan kolom 'role_id' untuk menyimpan ID peran
            $table->unsignedBigInteger('role_id');

            // Menambahkan foreign key untuk 'user_id' yang merujuk ke 'id' pada tabel 'users'
            // Menggunakan 'onDelete('cascade')' agar data dihapus jika pengguna terkait dihapus
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Menambahkan foreign key untuk 'role_id' yang merujuk ke 'id' pada tabel 'roles'
            // Menggunakan 'onDelete('cascade')' agar data dihapus jika peran terkait dihapus
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Membalikkan perubahan yang dilakukan oleh metode 'up'.
     *
     * @return void
     */
    public function down()
    {
        // Menghapus tabel 'user_role' jika migrasi dibatalkan
        Schema::dropIfExists('user_role');
    }
};
