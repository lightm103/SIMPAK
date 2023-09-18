<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataKendaraanRequest; // Import request yang sesuai
use App\Models\DataKendaraan;
use Illuminate\Http\Request;

class DataKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataKendaraans = DataKendaraan::all();
        return view('pages.datakendaraan.index', compact('dataKendaraans',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.datakendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataKendaraanRequest $request)
    {
        // dd($request);
        $data = $request->validated();
        // dd($data);

        // foto kendaraan
        $filekendaraan = $data['foto_kendaraan'];
        $filekendaraan_name = $filekendaraan->getClientOriginalName();
        $filekendaraan_ext = $filekendaraan->getClientOriginalExtension();
        $filekendaraan_path = md5(time() . $filekendaraan_name) . "." . $filekendaraan_ext;

        // Set Data Image
        $data['foto_kendaraan'] = $filekendaraan_path;

        $filekendaraan->storeAs('/public/fotokendaraan', $filekendaraan_path);

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
        DataKendaraan::create([
            'plat_nomer' => $data['plat_nomer'],
            'nama_pengguna' => $data['nama_pengguna'],
            'alamat_pengguna' => $data['alamat_pengguna'],
            'foto_kendaraan' => $filekendaraan_path,
            'foto_pengguna' => $filepengguna_path,
            'notelpon_pengguna' => $data['notelpon_pengguna'],
            'merek_kendaraan' => $data['merek_kendaraan'],
            'jenis_kendaraan' => $data['jenis_kendaraan'],
            'tahun_perolehan' => $data['tahun_perolehan'],
            'jabatan_pengguna' => $data['jabatan_pengguna'],
        ]);

        return redirect()->route('datakendaraan.index')->with('success', 'Data kendaraan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Tampilkan detail data kendaraan
        $dataKendaraan = DataKendaraan::findOrFail($id);
        return view('pages.datakendaraan.show', compact('dataKendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Tampilkan form untuk mengedit data kendaraan
        $dataKendaraan = DataKendaraan::findOrFail($id);
        return view('pages.datakendaraan.edit', compact('dataKendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreDataKendaraanRequest $request, string $id)
    {
        // Lakukan validasi dan simpan perubahan
        $dataKendaraan = DataKendaraan::findOrFail($id);
        $data = $request->validated();

        // Handle pembaruan foto jika diperlukan
        if ($request->hasFile('foto_kendaraan')) {
            $fileKendaraan = $data['foto_kendaraan'];
            $fileKendaraanPath = $fileKendaraan->store('fotokendaraan');
            $data['foto_kendaraan'] = $fileKendaraanPath;
        }

        if ($request->hasFile('foto_pengguna')) {
            $filePengguna = $data['foto_pengguna'];
            $filePenggunaPath = $filePengguna->store('fotopengguna');
            $data['foto_pengguna'] = $filePenggunaPath;
        }

        $dataKendaraan->update($data);

        return redirect()->route('datakendaraan.index')->with('success', 'Data kendaraan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataKendaraan = DataKendaraan::where('id' ,$id);
        $dataKendaraan->delete();
        return redirect()->route('admin.datakendaraan.index')->with('success', 'Data kendaraan berhasil dihapus');
    }
}
