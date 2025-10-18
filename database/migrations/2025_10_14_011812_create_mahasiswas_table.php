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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa'); // Nama lengkap mahasiswa
            $table->string('nim')->unique(); // Nomor Induk Mahasiswa, harus unik
            $table->text('alamat')->nullable(); // Alamat (bisa panjang dan boleh kosong)
            $table->string('fakultas'); // Fakultas mahasiswa
            $table->string('email')->unique(); // Email mahasiswa, harus unik
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
