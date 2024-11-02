<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori; // Pastikan model Kategori ada
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Menampilkan semua kategori
    public function index()
    {
        // Mengambil kategori dengan perangkat listriknya
        $kategori = Kategori::with('perangkatListrik')->get();
        return response()->json($kategori);
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:100',
        ]);

        // Menyimpan kategori baru
        $kategori = Kategori::create($request->only(['nama_kategori']));

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
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return response()->json(['error' => 'Kategori tidak ditemukan'], 404);
        }

        $request->validate([
            'nama_kategori' => 'sometimes|required|string|max:100',
        ]);

        $kategori->update($request->only(['nama_kategori']));

        return response()->json($kategori, 200);
    }

    // Menghapus kategori berdasarkan ID
    public function destroy($id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return response()->json(['error' => 'Kategori tidak ditemukan'], 404);
        }

        $kategori->delete();
        return response()->json(['message' => 'Kategori berhasil dihapus'], 200);
    }
}
