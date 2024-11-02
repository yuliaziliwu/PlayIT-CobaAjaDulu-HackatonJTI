<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;

Route::get('/', function () {
    return view('Home');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/admin/data-category', function () {
    return view('admin.category');
});

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
