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
        Schema::create('personal_access_tokens', function (Blueprint $table) { //untuk menyimpan informasi tentang token akses pribadi yang digunakan untuk autentikasi menggunakan Laravel Sanctum.
            $table->id(); //Menambahkan kolom id yang bertipe auto-incrementing integer. Ini akan menjadi primary key untuk tabel personal_access_tokens.
            $table->morphs('tokenable'); //Kolom ini digunakan dalam polymorphic relationships untuk menunjuk ke model mana token ini terkait.
            $table->string('name');//Menambahkan kolom name yang berfungsi untuk menyimpan nama atau deskripsi dari token akses pribadi ini.
            $table->string('token', 64)->unique(); //Kolom ini bertipe string, panjang 64 karakter, dan diatur sebagai unique untuk memastikan bahwa setiap token yang disimpan di tabel ini adalah unik.
            $table->text('abilities')->nullable(); //Kolom ini bertipe text dan bersifat nullable, artinya kolom ini tidak wajib diisi.
            $table->timestamp('last_used_at')->nullable(); //Menambahkan kolom last_used_at untuk menyimpan waktu terakhir kali token ini digunakan.
            $table->timestamp('expires_at')->nullable(); //Menambahkan kolom expires_at yang menyimpan waktu kedaluwarsa token.
            $table->timestamps(); //Menambahkan kolom created_at dan updated_at secara otomatis, yang digunakan untuk mencatat waktu pembuatan dan pembaruan token.
        });
        // membuat tabel personal_access_tokens di database. Tabel ini digunakan oleh Laravel Sanctum untuk menyimpan informasi mengenai token akses pribadi (personal access tokens) yang digunakan oleh aplikasi untuk autentikasi pengguna, biasanya dalam API atau aplikasi SPA (Single Page Application).
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
