<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandarListrikSeeder extends Seeder
{
    public function run()
    {
        DB::table('standar_listrik')->insert([
            [
                'daya_maksimum' => 900,  // Daya maksimum dalam watt
                'tarif_per_kwh' => 1352.00    // Tarif per kWh dalam satuan lokal
            ],
            [
                'daya_maksimum' => 1300,  // Daya maksimum dalam watt
                'tarif_per_kwh' => 1444.70    // Tarif per kWh dalam satuan lokal
            ],
            [
                'daya_maksimum' => 2200,  // Daya maksimum dalam watt
                'tarif_per_kwh' => 1444.70    // Tarif per kWh dalam satuan lokal
            ],
        ]);
    }
}
