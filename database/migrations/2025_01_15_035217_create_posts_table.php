<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel 'posts'.
     *
     * @return void
     */
    public function up()
    {
        // Membuat tabel 'posts' untuk menyimpan data postingan
        Schema::create('posts', function (Blueprint $table) {
            // Menambahkan kolom 'id' sebagai primary key dengan auto-increment
            $table->id();
            
            // Menambahkan kolom 'title' untuk menyimpan judul postingan
            $table->string('title');
            
            // Menambahkan kolom 'content' untuk menyimpan isi postingan
            $table->text('content');
            
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
        // Menghapus tabel 'posts' jika migrasi dibatalkan
        Schema::dropIfExists('posts');
    }
};
