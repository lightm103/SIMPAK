<?php

namespace App\Http\Controllers;

use App\Models\DataPerangkat;
use App\Http\Requests\StoreDataPerangkatRequest;
use App\Http\Requests\UpdateDataPerangkatRequest;

class DataPerangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPerangkats = DataPerangkat::all();
        return view('pages.dataperangkat.index', compact('dataPerangkats',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dataperangkat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataPerangkatRequest $request)
    {
        // dd($request);
        $data = $request->validated();
        // dd($data);

        // foto kendaraan
        $fileperangkat = $data['foto_perangkat'];
        $fileperangkat_name = $fileperangkat->getClientOriginalName();
        $fileperangkat_ext = $fileperangkat->getClientOriginalExtension();
        $fileperangkat_path = md5(time() . $fileperangkat_name) . "." . $fileperangkat_ext;

        // Set Data Image
        $data['foto_perangkat'] = $fileperangkat_path;

        $fileperangkat->storeAs('/public/fotoperangkat', $fileperangkat_path);

        // foto pengguna
        $filepengguna = $data['foto_pengguna'];
        $filepengguna_name = $filepengguna->getClientOriginalName();
        $filepengguna_ext = $filepengguna->getClientOriginalExtension();
        $filepengguna_path = md5(time() . $filepengguna_name) . "." . $filepengguna_ext;

        // Set Data Image
        $data['foto_pengguna'] = $filepengguna_path;

        $filepengguna->storeAs('/public/fotopengguna', $filepengguna_path);

        // $fileKendaraan = $data['foto_kendaraan'];
        // $filePengguna = $data['foto_pengguna'];

        // // Menyimpan foto kendaraan
        // $fileKendaraanPath = $fileKendaraan->store('/public/fotokendaraan');

        // // Menyimpan foto pengguna
        // $filePenggunaPath = $filePengguna->store('/public/fotopengguna');
        // Menyimpan data ke dalam database
        DataPerangkat::create([
            'nama_perangkat' => $data['nama_perangkat'],
            'nama_pengguna' => $data['nama_pengguna'],
            'alamat_pengguna' => $data['alamat_pengguna'],
            'foto_perangkat' => $fileperangkat_path,
            'foto_pengguna' => $filepengguna_path,
            'notelpon_pengguna' => $data['notelpon_pengguna'],
            'merek_perangkat' => $data['merek_perangkat'],
            'tahun_perolehan' => $data['tahun_perolehan'],
            'jabatan_pengguna' => $data['jabatan_pengguna'],
        ]);

        return redirect()->route('admin.dataperangkat.index')->with('success', 'Data perangkat berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Tampilkan detail data kendaraan
        $dataPerangkat = DataPerangkat::findOrFail($id);
        return view('pages.dataperangkat.show', compact('dataPerangkat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Tampilkan form untuk mengedit data kendaraan
        $dataPerangkat = DataPerangkat::findOrFail($id);
        return view('pages.dataperangkat.edit', compact('dataPerangkat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataPerangkatRequest $request, string $id)
    {
        $dataPerangkat = DataPerangkat::findOrFail($id);
        $data = $request->validated();

        // Handle pembaruan foto perangkat jika diperlukan
        if ($request->hasFile('foto_perangkat')) {
            $filePerangkat = $request->file('foto_perangkat');
            $filePerangkatPath = $filePerangkat->store('public/fotoperangkat');
            $data['foto_perangkat'] = basename($filePerangkatPath);  // simpan hanya nama file
        }

        // Handle pembaruan foto pengguna jika diperlukan
        if ($request->hasFile('foto_pengguna')) {
            $filePengguna = $request->file('foto_pengguna');
            $filePenggunaPath = $filePengguna->store('public/fotopengguna');
            $data['foto_pengguna'] = basename($filePenggunaPath);  // simpan hanya nama file
        }

        $dataPerangkat->update($data);

        return redirect()->route('admin.dataperangkat.index')->with('success', 'Data perangkat berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataPerangkat = DataPerangkat::findOrFail($id);
        $dataPerangkat->delete();
        return redirect()->route('admin.dataperangkat.index')->with('success', 'Data perangkat berhasil dihapus');
    }
}
