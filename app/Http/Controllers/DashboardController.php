<?php

namespace App\Http\Controllers;

use App\Models\DataKendaraan;
use App\Models\DataPerangkat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $count = DataPerangkat::all()->count();
        $count = DataKendaraan::all()->count();

        return view('pages.dashboard.index', compact('count'));
    }
}
