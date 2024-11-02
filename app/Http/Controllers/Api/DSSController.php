<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\PerangkatListrik;
use App\Models\BobotKriteria;
use Illuminate\Http\Request;

class DSSController extends Controller
{
    public function calculate(Request $request)
    {
        // Fungsi untuk menghitung inputDurasi maksimum agar tergolong bijak
        function calculateBijakInputDurasi($device, $inputDaya, $bobotDaya, $bobotDurasi) {
            $numerator = $device->durasi_bijak * $bobotDurasi;
            $denominator = 0.75 - (($device->daya_bijak / $inputDaya) * $bobotDaya);

            if ($denominator > 0) {
                return $numerator / $denominator; // Durasi maksimum agar bijak
            } else {
                return null; // Tidak mungkin mencapai skor bijak
            }
        }

        // Fungsi untuk menghitung inputDaya maksimum agar tergolong bijak
        function calculateBijakInputDaya($device, $inputDurasi, $bobotDaya, $bobotDurasi) {
            $numerator = $device->daya_bijak * $bobotDaya;
            $denominator = 0.75 - (($device->durasi_bijak / $inputDurasi) * $bobotDurasi);

            if ($denominator > 0) {
                return $numerator / $denominator; // Daya maksimum agar bijak
            } else {
                return null; // Tidak mungkin mencapai skor bijak
            }
        }

        // Input dari pengguna
        $userInputs = $request->input('userInput'); // Array of devices with daya and durasi input
        $costPerKwh = $request->input('costPerKwh'); // Ambil cost per kWh dari input pengguna

        // Ambil bobot untuk kriteria daya dan durasi
        $bobotDaya = BobotKriteria::where('kriteria', 'daya')->value('bobot');
        $bobotDurasi = BobotKriteria::where('kriteria', 'durasi')->value('bobot');

        // Ambil semua perangkat dan kategori terkait
        $devices = Kategori::with('perangkatListrik')->get();

        $results = [];

        foreach ($devices as $device) {
            foreach ($device->perangkatListrik as $perangkat) {
                // Cari input pengguna yang sesuai dengan perangkat
                $userInput = collect($userInputs)->firstWhere('name', $perangkat->nama_perangkat);

                if ($userInput) {
                    // Normalisasi daya bijak dan durasi bijak
                    $normalizedDaya = $device->daya_bijak / $userInput['inputDaya'];
                    $normalizedDurasi = $device->durasi_bijak / $userInput['inputDurasi'];

                    // Hitung skor akhir
                    $score = ($normalizedDaya * $bobotDaya) + ($normalizedDurasi * $bobotDurasi);

                    // Klasifikasi perangkat
                    $classification = $score > 0.75 ? 'Bijak' : 'Tidak Bijak';

                    // Rekomendasi jika Tidak Bijak
                    $recommendation = [];
                    if ($classification === 'Tidak Bijak') {
                        $maxDurasiBijak = calculateBijakInputDurasi($device, $userInput['inputDaya'], $bobotDaya, $bobotDurasi);
                        $maxDayaBijak = calculateBijakInputDaya($device, $userInput['inputDurasi'], $bobotDaya, $bobotDurasi);

                        $namaPerangkat = $perangkat->nama_perangkat; // Nama perangkat

                        if ($maxDurasiBijak !== null && $maxDayaBijak !== null) {
                            $recommendation[] = "Penggunaan <b> $namaPerangkat </b> tidak bijak, kamu bisa menggunakan perangkat dengan daya di bawah <b>" . round($maxDayaBijak, 2) . "</b> watt atau menggunakan perangkat dengan durasi di bawah <b>" . round($maxDurasiBijak, 2) . "</b> jam.";
                        } elseif ($maxDurasiBijak !== null) {
                            $recommendation[] = "Penggunaan <b> $namaPerangkat </b> tidak bijak, kamu bisa menggunakan perangkat dengan durasi di bawah <b>" . round($maxDurasiBijak, 2) . "</b> jam.";
                        } elseif ($maxDayaBijak !== null) {
                            $recommendation[] = "Penggunaan <b> $namaPerangkat </b> tidak bijak, kamu bisa menggunakan perangkat dengan daya di bawah <b>" . round($maxDayaBijak, 2) . "</b> watt.";
                        }
                    }

                    // Simpan hasil ke array
                    $results[] = [
                        'nama_perangkat' => $perangkat->nama_perangkat,
                        'inputDaya' => $userInput['inputDaya'],
                        'inputDurasi' => $userInput['inputDurasi'],
                        'inputCount' => $userInput['inputCount'],
                        'inputPerBulan' => $userInput['inputPerBulan'],
                        'score' => round($score, 3),
                        'classification' => $classification,
                        'recommendation' => $recommendation
                    ];
                }
            }
        }

        // Hitung total pengeluaran
        $totalCostResult = $this->calculateCost($userInputs, (float)$costPerKwh);

        // Return hasil perhitungan, termasuk total biaya dan total kWh
        return response()->json([
            'results' => $results,
            'totalCost' => round($totalCostResult['totalCost'], 2), // Total biaya bulanan
            'totalKwh' => round($totalCostResult['totalKwh'], 2) // Total kWh bulanan
        ]);
    }

    private function calculateCost(array $userInputs, float $costRate)
    {
        $totalCost = 0; // Variabel untuk menghitung total biaya
        $totalKwh = 0; // Variabel untuk menghitung total kWh

        foreach ($userInputs as $input) {
            $applianceCount = $input['inputCount']; // Jumlah perangkat
            $powerWatt = $input['inputDaya']; // Daya perangkat
            $hoursPerDay = $input['inputDurasi']; // Jam per hari
            $daysInMonth = $input['inputPerBulan']; // Jumlah pemakaian per bulan

            // Hitung total kWh untuk perangkat ini
            $monthlyKwh = ($applianceCount * $powerWatt * $hoursPerDay * $daysInMonth) / 1000; // Menghitung kWh
            $totalKwh += $monthlyKwh; // Tambah ke total kWh

            // Hitung total biaya untuk perangkat ini
            $monthlyCost = $monthlyKwh * $costRate; // Hitung biaya menggunakan total kWh
            $totalCost += $monthlyCost; // Tambah ke total biaya
        }

        return [
            'totalCost' => $totalCost,
            'totalKwh' => $totalKwh // Kembalikan total kWh
        ];
    }
}
