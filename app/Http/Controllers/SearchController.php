<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPerangkat;
use App\Models\User;

class SearchController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function search(Request $request){

        $query = $request->get('query');
        $filterResult = DataPerangkat::where('nama_perangkat', 'LIKE', '%'. $query. '%')->get();
        $dataModified = array();
        foreach ($filterResult as $item){
            $dataModified[] = $item->nama_perangkat;
        }
        return response()->json($dataModified);
    }
}
