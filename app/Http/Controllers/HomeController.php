<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKendaraan;
use App\Models\DataPerangkat;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
      return view('welcome');
    }
    
    public function searchData(Request $request){
        $searchType = $request->get('search_type'); // default search type
        // dd($searchType);
        $keyword = $request->get('keyword');
        
        $results = [];
        $dataKendaraans = [];
        $dataPerangkats = [];
        if ($searchType === 'datakendaraans') {
            $results = DataKendaraan::where('plat_nomer', 'LIKE', '%'.$keyword.'%')->get();
            // dd($results);
               $dataKendaraans = $results;
            } elseif ($searchType === 'dataperangkats') {
                $results = DataPerangkat::where('nama_perangkat', 'LIKE', '%'.$keyword.'%')->get();
                // dd($results);
               $dataPerangkats = $results;
           } else {
               $results = [];
               $dataKendaraans = [];
               $dataPerangkats = [];
           }
           // dd($dataKendaraan);
           
           return view('search.result', compact('results', 'searchType', 'dataKendaraans', 'dataPerangkats'));
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
