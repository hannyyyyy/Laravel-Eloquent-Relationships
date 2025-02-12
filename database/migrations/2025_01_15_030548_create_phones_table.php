<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel 'phones'.
     *
     * @return void
     */
    public function up()
    {
        // Membuat tabel 'phones' dengan kolom-kolom yang diperlukan
        Schema::create('phones', function (Blueprint $table) {
            // Menambahkan kolom 'id' sebagai primary key yang auto-incrementing
            $table->id();
            
            // Menambahkan kolom 'user_id' yang akan merujuk ke tabel 'users'
            // Kolom ini menyimpan ID pengguna yang memiliki nomor telepon
            $table->unsignedBigInteger('user_id');
            
            // Menambahkan kolom 'phone' untuk menyimpan nomor telepon
            $table->string('phone');
            
            // Menambahkan kolom 'timestamps' untuk menyimpan waktu pembuatan dan pembaruan data
            $table->timestamps();

            // Menambahkan foreign key constraint untuk 'user_id'
            // Menghubungkan kolom 'user_id' ke kolom 'id' pada tabel 'users'
            // Menambahkan onDelete('cascade') yang menghapus nomor telepon terkait saat pengguna dihapus
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Membalikkan perubahan yang dilakukan pada metode 'up'.
     *
     * @return void
     */
    public function down()
    {
        // Menghapus tabel 'phones' jika migrasi dibatalkan
        Schema::dropIfExists('phones');
    }
};