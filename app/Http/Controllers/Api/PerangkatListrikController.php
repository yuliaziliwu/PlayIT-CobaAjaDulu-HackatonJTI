<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\PerangkatListrik;
use Illuminate\Http\Request;

class PerangkatListrikController extends Controller
{
    // Menampilkan semua perangkat listrik
    public function index()
    {
        $perangkat = PerangkatListrik::all();
        return response()->json($perangkat);
    }

    // Menyimpan perangkat listrik baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kategori_id' => 'required|exists:kategori,id_kategori',
            'nama_perangkat' => 'required|string|max:100',
            'daya' => 'required|integer',
        ]);

        // Menyimpan perangkat listrik baru
        $perangkat = PerangkatListrik::create($request->only(['kategori_id', 'nama_perangkat', 'daya']));

        return response()->json($perangkat, 201);
    }

    // Menampilkan perangkat listrik berdasarkan ID
    public function show($id)
    {
        $perangkat = PerangkatListrik::find($id);

        if (!$perangkat) {
            return response()->json(['error' => 'Perangkat listrik tidak ditemukan'], 404);
        }

        return response()->json($perangkat, 200);
    }

    // Mengupdate perangkat listrik berdasarkan ID
    public function update(Request $request, $id)
    {
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
    }

    // Menghapus perangkat listrik berdasarkan ID
    public function destroy($id)
    {
        $perangkat = PerangkatListrik::find($id);

        if (!$perangkat) {
            return response()->json(['error' => 'Perangkat listrik tidak ditemukan'], 404);
        }

        $perangkat->delete();
        return response()->json(['message' => 'Perangkat listrik berhasil dihapus'], 200);
    }
}
