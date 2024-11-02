<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StandarListrik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StandarListrikController extends Controller
{
    // Menampilkan semua standar listrik
    public function admin(Request $request)
    {
        // Mengambil data standar listrik dengan paginasi, misalnya 10 item per halaman
        $standar = StandarListrik::paginate(10);

        // Mengembalikan response JSON dengan data paginated
        return response()->json($standar);
    }

    // Menyimpan standar listrik baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'daya_maksimum' => 'required|integer',
            'tarif_per_kwh' => 'required|numeric',
        ]);

        // Menyimpan standar listrik baru dengan daya_maksimum dan tarif_per_kwh
        $standar = StandarListrik::create($request->only(['daya_maksimum', 'tarif_per_kwh']));

        return response()->json($standar, 201);
    }

    // Menampilkan standar listrik berdasarkan ID
    public function show($id)
    {
        $standar = StandarListrik::select('daya_maksimum', 'tarif_per_kwh')->find($id); // Mengambil daya_maksimum dan tarif_per_kwh

        if (!$standar) {
            return response()->json(['error' => 'Standar listrik tidak ditemukan'], 404);
        }

        return response()->json($standar, 200);
    }

    // Mengupdate standar listrik berdasarkan ID
    public function update(Request $request, $id)
    {
        Log::info('Mencoba mengupdate standar listrik dengan ID: ' . $id);

        // Validasi input
        $request->validate([
            'daya_maksimum' => 'sometimes|required|integer',
            'tarif_per_kwh' => 'sometimes|required|integer',
        ]);

        $standarListrik = StandarListrik::find($id);
        if (!$standarListrik) {
            return response()->json(['message' => 'Standar listrik not found'], 404);
        }

        // Mengupdate data dengan save()
        if ($request->has('daya_maksimum')) {
            $standarListrik->daya_maksimum = $request->daya_maksimum;
        }
        if ($request->has('tarif_per_kwh')) {
            $standarListrik->tarif_per_kwh = $request->tarif_per_kwh;
        }

        $standarListrik->update(); // Menyimpan perubahan

        return response()->json(['message' => 'Standar listrik updated successfully', 'standar_listrik' => $standarListrik]);
    }


    // Menghapus standar listrik berdasarkan ID
    public function destroy($id)
    {
        Log::info('Mencoba menghapus standar listrik dengan ID: ' . $id);

        // Mencari standar listrik berdasarkan ID
        $standar = StandarListrik::find($id);

        if (!$standar) {
            Log::warning('Standar listrik tidak ditemukan untuk ID: ' . $id);
            return response()->json(['error' => 'Standar listrik tidak ditemukan'], 404);
        }

        try {
            $standar->delete(); // Menghapus standar listrik
            Log::info('Standar listrik berhasil dihapus untuk ID: ' . $id);
            return response()->json(['message' => 'Standar listrik berhasil dihapus'], 200);
        } catch (\Exception $e) {
            Log::error('Kesalahan saat menghapus standar listrik ID ' . $id . ': ' . $e->getMessage());
            Log::error('Trace: ' . $e->getTraceAsString());
            return response()->json(['error' => 'Gagal menghapus standar listrik: ' . $e->getMessage()], 500);
        }
    }
}
