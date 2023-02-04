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
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('kategori_id')->nullable();
            $table->foreignId('bidang_id')->nullable();
            $table->foreignId('jenis_soal_id')->nullable();
            $table->string('kode_soal', 10);
            $table->string('gambar_karakter_soal');
            $table->string('judul_soal');
            $table->text('keterangan_soal')->nullable();
            $table->text('input_soal');
            $table->string('pilihan_1');
            $table->string('pilihan_2');
            $table->string('pilihan_3');
            $table->string('pilihan_4');
            $table->string('pilihan_5');
            $table->string('jawaban');
            $table->text('penjelasan_jawaban')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soals');
    }
};
