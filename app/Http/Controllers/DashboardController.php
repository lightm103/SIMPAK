<?php

namespace App\Http\Controllers;

use App\Models\DataKendaraan;
use App\Models\DataPerangkat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $countPerangkat = DataPerangkat::all()->count();
        $countKendaraan = DataKendaraan::all()->count();
        $total = $countPerangkat + $countKendaraan;

        return view('pages.dashboard.index', compact('total'));
    }
}
