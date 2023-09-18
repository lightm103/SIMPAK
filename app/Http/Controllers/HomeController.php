<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKendaraan;
use App\Models\DataPerangkat;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $dataPerangkats = DataPerangkat::all();
        $dataKendaraans = DataKendaraan::all();

        return view('welcome', compact('dataPerangkats', 'dataKendaraans'));
    }

    public function searchData(Request $request)
    {
        $keyword = $request->input('keyword');
        $searchType = $request->input('search_type');

        if ($searchType === 'datakendaraans') {
            $item = DataKendaraan::where('plat_nomer', 'LIKE', "%$keyword%")->first();
            if ($item) {
                return redirect()->route('datakendaraan.show', $item->id);
            }
        } else {
            $item = DataPerangkat::where('nama_perangkat', 'LIKE', "%$keyword%")->first();
            if ($item) {
                return redirect()->route('dataperangkat.show', $item->id);
            }
        }

        return back()->with('error', 'Data tidak ditemukan');
    }

    public function showLoginForm()
    {
        return view('admin.login'); // Pastikan Anda memiliki view dengan nama 'admin.login'
    }

    // Melakukan proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role === 'admin') {  // Diubah dari is_admin ke role
                return redirect()->route('admin.dashboard');
            }

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
        return redirect()->route('welcome');
    }
}
