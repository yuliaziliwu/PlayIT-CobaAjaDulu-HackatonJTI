<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BobotKriteria;
use Illuminate\Http\Request;

class BobotKriteriaController extends Controller
{
    // Menampilkan semua data
    public function admin()
    {
        // Mengambil semua data dari tabel bobot_kriteria
        $kriteria = BobotKriteria::all();
        return response()->json($kriteria);
    }

    // Menampilkan data berdasarkan ID
    public function show($id)
    {
        $kriteria = BobotKriteria::findOrFail($id);
        return response()->json($kriteria);
    }    

    // Mengupdate data
    public function update(Request $request, $id)
    {
        $request->validate([
            'kriteria' => 'required|string|max:100',
            'bobot' => 'required|numeric',
        ]);

        $bobotKriteria = BobotKriteria::findOrFail($id);
        $bobotKriteria->update($request->all());

        return response()->json($bobotKriteria);
    }
}
