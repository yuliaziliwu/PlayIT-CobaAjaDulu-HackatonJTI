<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori; // Pastikan model Kategori ada
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KategoriController extends Controller
{
    // Menampilkan semua kategori
    public function admin()
    {
        // Ambil data kategori dengan pagination, misalnya 10 item per halaman
        $kategori = Kategori::with('perangkatListrik')->paginate(10);
        return response()->json($kategori);
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:100',
            'durasi_bijak' => 'required|integer', // Menggunakan integer
            'daya_bijak' => 'required|integer', // Menggunakan integer
        ]);

        // Menyimpan kategori baru
        $kategori = Kategori::create($request->only(['nama_kategori', 'durasi_bijak', 'daya_bijak']));

        return response()->json($kategori, 201);
    }

    // Menampilkan kategori berdasarkan ID
    public function show($id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return response()->json(['error' => 'Kategori tidak ditemukan'], 404);
        }

        return response()->json($kategori, 200);
    }

    // Mengupdate kategori berdasarkan ID
    public function update(Request $request, $id)
    {
        Log::info('Mencoba mengupdate kategori dengan ID: ' . $id);

        $kategori = Kategori::find($id);

        if (!$kategori) {
            return response()->json(['error' => 'Kategori tidak ditemukan'], 404);
        }

        $request->validate([
            'nama_kategori' => 'sometimes|required|string|max:100',
            'durasi_bijak' => 'sometimes|required|integer',
            'daya_bijak' => 'sometimes|required|integer',
        ]);

        $kategori->update($request->only(['nama_kategori', 'durasi_bijak', 'daya_bijak']));

        return response()->json($kategori, 200);
    }
    // Menghapus kategori berdasarkan ID
    public function destroy($id)
    {
        Log::info('Mencoba menghapus kategori dengan ID: ' . $id);

        $kategori = Kategori::find($id);

        if (!$kategori) {
            Log::warning('Kategori tidak ditemukan untuk ID: ' . $id);
            return response()->json(['error' => 'Kategori tidak ditemukan'], 404);
        }

        try {
            $kategori->forceDelete(); // Ganti dengan forceDelete() jika soft deletes diaktifkan
            return response()->json(['message' => 'Kategori berhasil dihapus'], 200);
        } catch (\Exception $e) {
            Log::error('Kesalahan saat menghapus kategori: ' . $e->getMessage());
            Log::error('Trace: ' . $e->getTraceAsString());
            return response()->json(['error' => 'Gagal menghapus kategori: ' . $e->getMessage()], 500);
        }
    }
}
