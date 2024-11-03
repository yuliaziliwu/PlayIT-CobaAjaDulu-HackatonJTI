<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;

Route::get('/', function () {
    return view('Home');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/admin/data-category', function () {
        return view('admin.category');
    })->name('admin.dashboard');

    Route::get('/admin/edit-category', function () {
        return view('admin.edit_category');
    });

    Route::get('/admin/data-electrical', function () {
        return view('admin.electrical');
    });

    Route::get('/admin/edit-electrical', function () {
        return view('admin.edit_electrical');
    });

    Route::get('/admin/data-equipment', function () {
        return view('admin.equipment');
    });

    Route::get('/admin/edit-equipment', function () {
        return view('admin.edit_equipment');
    });
    
    Route::get('/admin/data-criteria', function () {
        return view('admin.criteria');
    });
    
    Route::get('/admin/edit-criteria', function () {
        return view('admin.edit_criteria');
    });

    Route::get('/admin/data-user', function () {
        return view('admin.user');
    });

});