<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PerangkatListrik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PerangkatListrikController extends Controller
{
    // Menampilkan semua perangkat listrik
    public function admin(Request $request)
    {
        $perPage = 10; // Jumlah data per halaman
        $devices = PerangkatListrik::paginate($perPage);
        return response()->json($devices);
    }

    // Menyimpan perangkat listrik baru
    public function store(Request $request)
    {
        Log::info('Menerima permintaan untuk menyimpan perangkat listrik: ', $request->all());

        try {
            // Validasi input
            $request->validate([
                'kategori_id' => 'required|exists:kategori,id_kategori',
                'nama_perangkat' => 'required|string|max:100',
                'daya' => 'required|integer',
            ]);
            Log::info('Validasi berhasil.');

            // Menyimpan perangkat listrik baru
            $perangkat = PerangkatListrik::create($request->only(['kategori_id', 'nama_perangkat', 'daya']));

            Log::info('Perangkat listrik baru berhasil disimpan: ', $perangkat->toArray());

            return response()->json(['data' => $perangkat, 'message' => 'Perangkat listrik berhasil disimpan'], 201);
        } catch (\Exception $e) {
            Log::error('Kesalahan saat menyimpan perangkat listrik: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal menyimpan perangkat listrik'], 500);
        }
    }

    // Menampilkan perangkat listrik berdasarkan ID

    public function show($id)
    {
        Log::info('Mencoba mengambil perangkat listrik dengan ID: ' . $id);

        $perangkat = PerangkatListrik::find($id);

        if (!$perangkat) {
            Log::warning('Perangkat listrik tidak ditemukan untuk ID: ' . $id);
            return response()->json(['error' => 'Perangkat listrik tidak ditemukan'], 404);
        }

        Log::info('Perangkat listrik ditemukan:', ['perangkat' => $perangkat]);

        return response()->json(['data' => $perangkat], 200);
    }


    // Mengupdate perangkat listrik berdasarkan ID
    public function update(Request $request, $id)
    {
        try {
            Log::info('Mencoba mengupdate perangkat listrik dengan ID: ' . $id);

            $perangkat = PerangkatListrik::find($id);

            if (!$perangkat) {
                return response()->json(['error' => 'Perangkat listrik tidak ditemukan'], 404);
            }

            $request->validate([
                'kategori_id' => 'sometimes|required|exists:kategori,id_kategori',
                'nama_perangkat' => 'sometimes|required|string|max:100',
                'daya' => 'sometimes|required|integer',
            ]);

            $perangkat->update($request->only(['kategori_id', 'nama_perangkat', 'daya']));

            return response()->json($perangkat, 200);
        } catch (\Exception $e) {
            Log::error('Kesalahan saat mengupdate perangkat: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal mengupdate perangkat: ' . $e->getMessage()], 500);
        }
    }





    // Menghapus perangkat listrik berdasarkan ID
    public function destroy($id)
    {
        Log::info('Mencoba menghapus perangkat dengan ID: ' . $id);

        // Temukan perangkat berdasarkan ID
        $perangkat = PerangkatListrik::find($id);

        // Jika perangkat tidak ditemukan, kembalikan error
        if (!$perangkat) {
            Log::warning('Perangkat tidak ditemukan untuk ID: ' . $id);
            return response()->json(['message' => 'Perangkat tidak ditemukan'], 404);
        }

        // Hapus perangkat
        $perangkat->delete();
        Log::info('Perangkat dengan ID ' . $id . ' berhasil dihapus.');

        return response()->json(['message' => 'Perangkat berhasil dihapus'], 200);
    }
}
