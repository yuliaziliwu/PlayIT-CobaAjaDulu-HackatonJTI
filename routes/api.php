<?php

use App\Http\Controllers\Api\BobotKriteriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\PerangkatListrikController;
use App\Http\Controllers\Api\StandarListrikController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Rute untuk Kategori
Route::get('/kategori/admin', [KategoriController::class, 'admin']);          // Mendapatkan daftar kategori
Route::get('/kategori/show/{id}', [KategoriController::class, 'show']);       // Mendapatkan detail kategori berdasarkan ID
Route::post('/kategori/store', [KategoriController::class, 'store']);         // Menambah kategori baru
Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);   // Memperbarui kategori berdasarkan ID
Route::delete('/kategori/destroy/{id}', [KategoriController::class, 'destroy']); // Menghapus kategori berdasarkan ID

// Rute untuk Perangkat Listrik
Route::get('/perangkat-listrik/admin', [PerangkatListrikController::class, 'admin']);          // Mendapatkan daftar perangkat listrik
Route::get('/perangkat-listrik/show/{id}', [PerangkatListrikController::class, 'show']);       // Mendapatkan detail perangkat listrik berdasarkan ID
Route::post('/perangkat-listrik/store', [PerangkatListrikController::class, 'store']);         // Menambah perangkat listrik baru
Route::put('/perangkat-listrik/update/{id}', [PerangkatListrikController::class, 'update']);   // Memperbarui perangkat listrik berdasarkan ID
Route::delete('/perangkat-listrik/destroy/{id}', [PerangkatListrikController::class, 'destroy']); // Menghapus perangkat listrik berdasarkan ID

// Rute untuk Standar Listrik
Route::get('/standar-listrik/admin', [StandarListrikController::class, 'admin']);          // Mendapatkan daftar standar listrik
Route::get('/standar-listrik/show/{id}', [StandarListrikController::class, 'show']);       // Mendapatkan detail standar listrik berdasarkan ID
Route::post('/standar-listrik/store', [StandarListrikController::class, 'store']);         // Menambah standar listrik baru
Route::put('/standar-listrik/update/{id}', [StandarListrikController::class, 'update']);   // Memperbarui standar listrik berdasarkan ID
Route::delete('/standar-listrik/destroy/{id}', [StandarListrikController::class, 'destroy']); // Menghapus standar listrik berdasarkan ID

// Rute untuk Kriteria
Route::get('/bobot-kriteria/admin', [BobotKriteriaController::class, 'admin']); // Mendapatkan daftar kriteria bobot
Route::get('/bobot-kriteria/show/{id}', [BobotKriteriaController::class, 'show']); // Mendapatkan detail kriteria bobot berdasarkan ID// Menambah kriteria bobot baru
Route::put('/bobot-kriteria/update/{id}', [BobotKriteriaController::class, 'update']); // Memperbarui kriteria bobot berdasarkan ID // Menghapus kriteria bobot berdasarkan ID

// Tambahkan rute tambahan jika diperlukan, contoh rute untuk tes
Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});



