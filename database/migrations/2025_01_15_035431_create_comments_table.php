<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel 'comments'.
     *
     * @return void
     */
    public function up()
    {
        // Membuat tabel 'comments' untuk menyimpan data komentar
        Schema::create('comments', function (Blueprint $table) {
            // Menambahkan kolom 'id' sebagai primary key dengan auto-increment
            $table->id();
            
            // Menambahkan kolom 'post_id' sebagai foreign key yang menghubungkan komentar dengan tabel 'posts'
            $table->unsignedBigInteger('post_id');
            
            // Menambahkan kolom 'comment' untuk menyimpan isi komentar
            $table->text('comment');
            
            // Menambahkan kolom 'created_at' dan 'updated_at' secara otomatis
            $table->timestamps();

            // Menambahkan foreign key constraint untuk 'post_id'
            // Menghubungkan ke kolom 'id' di tabel 'posts'
            // Menggunakan 'onDelete('cascade')' agar komentar ikut terhapus jika postingan terkait dihapus
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Membalikkan perubahan yang dilakukan oleh metode 'up'.
     *
     * @return void
     */
    public function down()
    {
        // Menghapus tabel 'comments' jika migrasi dibatalkan
        Schema::dropIfExists('comments');
    }
};
