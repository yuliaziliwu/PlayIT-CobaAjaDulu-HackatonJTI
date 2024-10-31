<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        DB::table('kategori')->insert([
            ['nama_kategori' => 'Elektronik'],
            ['nama_kategori' => 'Penerangan'],
            ['nama_kategori' => 'Pemanas Air'],
            ['nama_kategori' => 'Peralatan Dapur'],
        ]);
    }
}
