<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nidn')->unique(); // Nomor Induk Dosen Nasional
            $table->string('nama'); // Nama dosen
            $table->string('jenis_kelamin'); // Jenis kelamin
            $table->string('homebase'); // Homebase atau jurusan asal
            $table->string('pendidikan'); // Pendidikan terakhir
            $table->string('mata_kuliah_keahlian'); // Mata kuliah keahlian
            $table->string('jabatan_fungsional'); // Jabatan fungsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
