<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pajak;

class PajakController extends Controller
{
    public function index()
    {
        $dataPajaks = Pajak::all();
        return view('pages.datapajak.index', compact('dataPajaks'));
    }

    public function store(Request $request)
    {
        Pajak::create($request->all());
        return redirect()->route('admin.pajak.index');
    }

    public function edit($id)
    {
        $data = Pajak::findOrFail($id);
        return view('pages.datapajak.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pajak::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('pajak.index');
    }

    public function destroy($id)
    {
        Pajak::destroy($id);
        return redirect()->route('pajak.index');
    }
}
