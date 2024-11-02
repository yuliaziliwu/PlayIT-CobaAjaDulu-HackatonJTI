<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/dashboard');
        }

        return back();
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate(); // Hapus sesi
        $request->session()->regenerateToken(); // Regenerasi CSRF token

        return redirect()->route('login')->with('message', 'You have been logged out successfully.'); // Redirect ke halaman login dengan pesan
    }
    
    public function index(){
        return view('auth.login');
    }
}
