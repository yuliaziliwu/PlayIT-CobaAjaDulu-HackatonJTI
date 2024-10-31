<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerangkatListrikSeeder extends Seeder
{
    public function run()
    {
        DB::table('perangkat_listrik')->insert([
            ['kategori_id' => 1, 'nama_perangkat' => 'Televisi', 'daya' => 100],
            ['kategori_id' => 2, 'nama_perangkat' => 'Lampu LED', 'daya' => 15],
            ['kategori_id' => 3, 'nama_perangkat' => 'Water Heater', 'daya' => 2000],
            ['kategori_id' => 4, 'nama_perangkat' => 'Microwave', 'daya' => 800],
            ['kategori_id' => 1, 'nama_perangkat' => 'Kulkas', 'daya' => 150],
        ]);
    }
}
