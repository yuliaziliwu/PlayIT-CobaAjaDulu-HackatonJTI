<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandarListrikSeeder extends Seeder
{
    public function run()
    {
        DB::table('standar_listrik')->insert([
            ['daya_maksimum' => 1300],
            ['daya_maksimum' => 2200],
            ['daya_maksimum' => 3500],
        ]);
    }
}
