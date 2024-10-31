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
class electricalController extends Controller
{
    public function index () {
        return view('admin.electrical');
    }
}
class equipmentController extends Controller
{
    public function index () {
        return view('admin.equipment');
    }
}
class userController extends Controller
{
    public function index () {
        return view('admin.user');
    }
}
