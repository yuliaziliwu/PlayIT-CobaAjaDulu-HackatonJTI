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
            $table->integer('durasi_bijak');  // Kolom nama durasi bijak
            $table->integer('daya_bijak');  // Kolom nama daya bijak
            $table->timestamps();
        });

        // Tabel perangkat_listrik
        Schema::create('perangkat_listrik', function (Blueprint $table) {
            $table->id('id_perangkat');  // Kolom id_perangkat sebagai Primary Key
            $table->foreignId('kategori_id')->constrained('kategori', 'id_kategori');  // Foreign Key ke tabel kategori
            $table->string('nama_perangkat', 100);  // Nama perangkat
            $table->integer('daya');  // Konsumsi daya perangkat dalam watt
        });

        Schema::create('bobot_kriteria', function (Blueprint $table) {
            $table->id('id_kriteria');  // Kolom id_bobot sebagai Primary Key
            $table->string('kriteria', 100);  // kriteria
            $table->float('bobot');  // Bobot
        });

        // Tabel standar_listrik
        Schema::create('standar_listrik', function (Blueprint $table) {
            $table->id('id_standar_listrik');  // Kolom id_standar_listrik sebagai Primary Key
            $table->integer('daya_maksimum');  // Daya maksimum dalam watt
            $table->float('tarif_per_kwh');  // Daya maksimum dalam watt
            // Tidak ada foreign key yang ditambahkan
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key
            $table->string('name'); // Name of the admin
            $table->string('email')->unique(); // Admin email, must be unique
            $table->string('password'); // Password for admin account
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
        Schema::dropIfExists('standar_listrik');
        Schema::dropIfExists('perangkat_listrik');
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('users');
    }
}
