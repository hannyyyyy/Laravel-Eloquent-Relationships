<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel 'roles'.
     *
     * @return void
     */
    public function up()
    {
        // Membuat tabel 'roles' untuk menyimpan data peran pengguna
        Schema::create('roles', function (Blueprint $table) {
            // Menambahkan kolom 'id' sebagai primary key dengan auto-increment
            $table->id();
            
            // Menambahkan kolom 'name' untuk menyimpan nama peran (contoh: 'admin', 'editor', 'user')
            $table->string('name');
            
            // Menambahkan kolom 'created_at' dan 'updated_at' secara otomatis
            $table->timestamps();
        });
    }

    /**
     * Membalikkan perubahan yang dilakukan oleh metode 'up'.
     *
     * @return void
     */
    public function down()
    {
        // Menghapus tabel 'roles' jika migrasi dibatalkan
        Schema::dropIfExists('roles');
    }
};
