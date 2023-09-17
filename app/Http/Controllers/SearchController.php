<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKendaraan;
use App\Models\DataPerangkat;

class SearchController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        $query = $request->get('keyword');
        $searchType = $request->get('searchType');  // Perhatikan ini harus sesuai dengan yang dikirim dari AJAX

        $results = [];
        if ($searchType === 'datakendaraans') {
            $results = DataKendaraan::where('plat_nomer', 'like', "%$query%")->get();
        } elseif ($searchType === 'dataperangkats') {
            $results = DataPerangkat::where('nama_perangkat', 'like', "%$query%")->get();
        }

        return response()->json($results);
    }
}
