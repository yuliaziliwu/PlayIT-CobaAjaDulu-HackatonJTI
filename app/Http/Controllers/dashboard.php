<?php

namespace App\Http\Controllers;

class dashboardController extends Controller
{
    public function index () {
        return view('admin.dashboard');
    }
}

class categoryController extends Controller
{
    public function index () {
        return view('admin.category');
    }
}
