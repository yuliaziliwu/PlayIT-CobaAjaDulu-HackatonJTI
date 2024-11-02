<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        DB::table('kategori')->insert([
            [
                'nama_kategori' => 'AC',
                'durasi_bijak' => 3,  // durasi bijak dalam jam
                'daya_bijak' => 800    // daya bijak dalam watt
            ],
            [
                'nama_kategori' => 'Lampu',
                'durasi_bijak' => 2,  // durasi bijak dalam jam
                'daya_bijak' => 10     // daya bijak dalam watt
            ],
            [
                'nama_kategori' => 'Oven',
                'durasi_bijak' => 1,   // durasi bijak dalam jam
                'daya_bijak' => 1200    // daya bijak dalam watt
            ],
            [
                'nama_kategori' => 'Kulkas',
                'durasi_bijak' => 24,  // durasi bijak dalam jam (24 jam)
                'daya_bijak' => 150     // daya bijak dalam watt
            ],
            [
                'nama_kategori' => 'Televisi',
                'durasi_bijak' => 4,   // durasi bijak dalam jam
                'daya_bijak' => 100     // daya bijak dalam watt
            ],
        ]);
    }
}
