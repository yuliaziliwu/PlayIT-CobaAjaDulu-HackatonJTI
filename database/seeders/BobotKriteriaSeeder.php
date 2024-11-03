<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BobotKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bobot_kriteria')->insert([
            ['kriteria' => 'Daya', 'bobot' => 0.5],
            ['kriteria' => 'Durasi', 'bobot' => 0.5],
        ]);
    }
}
