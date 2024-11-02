<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerangkatListrikSeeder extends Seeder
{
    public function run()
    {
        DB::table('perangkat_listrik')->insert([
            ['kategori_id' => 1, 'nama_perangkat' => 'AC 1 pk', 'daya' => 800],
            ['kategori_id' => 1, 'nama_perangkat' => 'AC Mini', 'daya' => 600],
            ['kategori_id' => 1, 'nama_perangkat' => 'AC Portable', 'daya' => 750],

            ['kategori_id' => 2, 'nama_perangkat' => 'Lampu LED 10W', 'daya' => 10],
            ['kategori_id' => 2, 'nama_perangkat' => 'Lampu LED 15W', 'daya' => 15],
            ['kategori_id' => 2, 'nama_perangkat' => 'Lampu Neon', 'daya' => 18],

            ['kategori_id' => 3, 'nama_perangkat' => 'Oven Listrik', 'daya' => 1200],
            ['kategori_id' => 3, 'nama_perangkat' => 'Oven Konveksi', 'daya' => 900],

            ['kategori_id' => 4, 'nama_perangkat' => 'Kulkas 2 Pintu', 'daya' => 150],
            ['kategori_id' => 4, 'nama_perangkat' => 'Kulkas Mini', 'daya' => 100],
            ['kategori_id' => 4, 'nama_perangkat' => 'Kulkas 1 Pintu', 'daya' => 120],

            ['kategori_id' => 5, 'nama_perangkat' => 'TV LED 32"', 'daya' => 50],
            ['kategori_id' => 5, 'nama_perangkat' => 'TV LED 42"', 'daya' => 100],
            ['kategori_id' => 5, 'nama_perangkat' => 'Smart TV 55"', 'daya' => 150],
            ['kategori_id' => 5, 'nama_perangkat' => 'TV LCD 40"', 'daya' => 80],
        ]);
    }
}
