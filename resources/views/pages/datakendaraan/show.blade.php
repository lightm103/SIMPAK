@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.datakendaraan.index') }}" class="btn btn-secondary mx-3">
                <i class="ti ti-arrow-left me-2"></i> Back
            </a>
            <strong class="fs-5"> Informasi Kendaraan Dinas</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Kolom 1 -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nomorPlat" class="form-label">Nomor Plat Kendaraan Dinas</label>
                        <input type="text" value="{{ $dataKendaraan->plat_nomer }}"
                            class="form-control" name="plat_nomer" id="nomorPlat"
                            placeholder="Masukkan Nomor Plat Kendaraan Dinas" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="namaPengguna" class="form-label">Nama Pengguna</label>
                        <input type="text" value="{{ $dataKendaraan->nama_pengguna }}"
                            class="form-control" name="nama_pengguna" id="namaPengguna"
                            placeholder="Masukkan Nama Pengguna" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="jabatanPengguna" class="form-label">Jabatan Pengguna</label>
                        <input type="text" value="{{ $dataKendaraan->jabatan_pengguna }}"
                            class="form-control" name="jabatan_pengguna" id="jabatanPengguna"
                            placeholder="Masukkan Jabatan Pengguna" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="alamatPengguna" class="form-label">Alamat Pengguna</label>
                        <input class="form-control" name="alamat_pengguna" id="alamatPengguna" rows="3"
                            placeholder="Masukkan Alamat Pengguna" value="{{$dataKendaraan->alamat_pengguna }}"  disabled>
                    </div>
                    <div class="mb-3">
                        <label for="fotoKendaraanDinas" class="form-label">Foto Kendaraan
                            Dinas</label>
                        <div class="mb-3">
                            <img src="{{ url('storage/fotokendaraan/' . $dataKendaraan->foto_kendaraan) }}"
                                alt="" style="width: 200px; height: 200px; object-fit: cover;"
                                srcset="">
                        </div>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="col-md-6">
                    
                    <div class="mb-3">
                        <label for="nomorTelepon" class="form-label">Nomor Telepon Pengguna</label>
                        <input type="text" value="{{ $dataKendaraan->notelpon_pengguna }}"
                            class="form-control" name="notelpon_pengguna" id="nomorTelepon"
                            placeholder="Masukkan Nomor Telepon Pengguna" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="merekKendaraan" class="form-label">Merek Kendaraan</label>
                        <input type="text" value="{{ $dataKendaraan->merek_kendaraan }}"
                            class="form-control" name="merek_kendaraan" id="merekKendaraan"
                            placeholder="Masukkan Merek Kendaraan" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="jenisKendaraan" class="form-label">Jenis Kendaraan</label>
                        <input type="text" value="{{ $dataKendaraan->jenis_kendaraan }}"
                            class="form-control" name="jenis_kendaraan" id="jenisKendaraan"
                            placeholder="Masukkan Jenis Kendaraan" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="tahunPerolehan" class="form-label">Tahun Perolehan</label>
                        <input type="text" value="{{ $dataKendaraan->tahun_perolehan }}"
                            class="form-control" name="tahun_perolehan" id="tahunPerolehan"
                            placeholder="Masukkan Tahun Perolehan Kendaraan" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="fotoPengguna" class="form-label">Foto Pengguna</label>
                        <div class="mb-3">
                            <img src="{{ url('storage/public/fotopengguna/' . $dataKendaraan->foto_pengguna) }}"
                                alt="" style="width: 200px; height: 200px; object-fit: cover;"
                                srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
