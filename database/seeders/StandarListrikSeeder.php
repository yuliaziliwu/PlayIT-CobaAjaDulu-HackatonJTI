<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandarListrikSeeder extends Seeder
{
    public function run()
    {
        DB::table('standar_listrik')->insert([
            ['tipe_rumah' => 'Type 36', 'daya_maksimum' => 1300],
            ['tipe_rumah' => 'Type 45', 'daya_maksimum' => 2200],
            ['tipe_rumah' => 'Type 70', 'daya_maksimum' => 3500],
        ]);
    }
}
