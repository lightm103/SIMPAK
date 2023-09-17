<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKendaraan;
use App\Models\DataPerangkat;

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
}
