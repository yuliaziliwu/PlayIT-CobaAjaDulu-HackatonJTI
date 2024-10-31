<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnergyConsumptionTables extends Migration
{
    public function up()
    {
        // Tabel kategori
        Schema::create('kategori', function (Blueprint $table) {
            $table->id('id_kategori');  // Kolom id_kategori sebagai Primary Key
            $table->string('nama_kategori', 100);  // Kolom nama kategori
            $table->timestamps();
        });

        // Tabel perangkat_listrik
        Schema::create('perangkat_listrik', function (Blueprint $table) {
            $table->id('id_perangkat');  // Kolom id_perangkat sebagai Primary Key
            $table->foreignId('kategori_id')->constrained('kategori', 'id_kategori');  // Foreign Key ke tabel kategori
            $table->string('nama_perangkat', 100);  // Nama perangkat
            $table->integer('daya');  // Konsumsi daya perangkat dalam watt
            $table->timestamps();
        });

        // Tabel standar_listrik
        Schema::create('standar_listrik', function (Blueprint $table) {
            $table->id('id_standar_listrik');  // Kolom id_standar_listrik sebagai Primary Key
            $table->string('tipe_rumah', 50);  // Nama tipe rumah, misal: "Type 45"
            $table->integer('daya_maksimum');  // Daya maksimum dalam watt
            
            // Tidak ada foreign key yang ditambahkan

            $table->timestamps();
        });

        // Tabel pengguna
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('id_pengguna');  // Kolom id_pengguna sebagai Primary Key
            $table->string('nama_lengkap', 100);  // Nama lengkap pengguna
            $table->string('email')->unique();  // Email pengguna, harus unik
            $table->string('provider')->default('gmail');  // Provider autentikasi, default ke Gmail
            $table->string('provider_id');  // ID pengguna di provider (misal: Google)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
        Schema::dropIfExists('standar_listrik');
        Schema::dropIfExists('perangkat_listrik');
        Schema::dropIfExists('kategori');
    }
}
