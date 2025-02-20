<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migration untuk membuat tabel "failed_jobs".
     * Tabel ini digunakan oleh Laravel untuk mencatat pekerjaan (job) yang gagal dalam sistem queue.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            // ID auto-increment sebagai primary key
            $table->id();

            // UUID unik untuk setiap job yang gagal, berguna untuk tracking
            $table->string('uuid')->unique();

            // Nama koneksi queue yang digunakan saat job dijalankan
            $table->text('connection');

            // Nama queue tempat job tersebut berjalan
            $table->text('queue');

            // Data payload dari job yang gagal (isi lengkap dari job tersebut)
            $table->longText('payload');

            // Informasi error atau exception yang menyebabkan job gagal
            $table->longText('exception');

            // Timestamp waktu job gagal, menggunakan waktu saat ini secara default
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Membatalkan migration dengan menghapus tabel "failed_jobs".
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
};
