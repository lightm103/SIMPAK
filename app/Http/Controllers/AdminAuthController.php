<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('admin.login'); // Pastikan Anda memiliki view dengan nama 'admin.login'
    }

    // Melakukan proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Autentikasi user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika user adalah admin, redirect ke dashboard admin
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            }

            // Jika bukan admin, logout dan redirect kembali ke form login
            Auth::logout();
            return back()->withErrors([
                'email' => 'Only admin can login from this page.',
            ]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Melakukan proses logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
