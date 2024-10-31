<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\StandarListrik;
use Illuminate\Http\Request;

class StandarListrikController extends Controller
{
    // Menampilkan semua standar listrik
    public function index()
    {
        $standar = StandarListrik::all();
        return response()->json($standar);
    }

    // Menyimpan standar listrik baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'tipe_rumah' => 'required|string|max:50',
            'daya_maksimum' => 'required|integer',
        ]);

        // Menyimpan standar listrik baru
        $standar = StandarListrik::create($request->only(['tipe_rumah', 'daya_maksimum']));

        return response()->json($standar, 201);
    }

    // Menampilkan standar listrik berdasarkan ID
    public function show($id)
    {
        $standar = StandarListrik::find($id);

        if (!$standar) {
            return response()->json(['error' => 'Standar listrik tidak ditemukan'], 404);
        }

        return response()->json($standar, 200);
    }

    // Mengupdate standar listrik berdasarkan ID
    public function update(Request $request, $id)
    {
        $standar = StandarListrik::find($id);

        if (!$standar) {
            return response()->json(['error' => 'Standar listrik tidak ditemukan'], 404);
        }

        $request->validate([
            'tipe_rumah' => 'sometimes|required|string|max:50',
            'daya_maksimum' => 'sometimes|required|integer',
        ]);

        $standar->update($request->only(['tipe_rumah', 'daya_maksimum']));

        return response()->json($standar, 200);
    }

    // Menghapus standar listrik berdasarkan ID
    public function destroy($id)
    {
        $standar = StandarListrik::find($id);

        if (!$standar) {
            return response()->json(['error' => 'Standar listrik tidak ditemukan'], 404);
        }

        $standar->delete();
        return response()->json(['message' => 'Standar listrik berhasil dihapus'], 200);
    }
}
