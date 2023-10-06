@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.datakendaraan.index') }}" class="btn btn-secondary mx-3">
                    <i class="ti ti-arrow-left me-2"></i> Back
                </a>
                <strong class="fs-5"> Edit Data Perangkat Elektronik</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.datakendaraan.update', $dataKendaraan->id) }}" method="POST" id="tambahdata"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3">
                            <label for="nomorPlat" class="form-label">Nomor Plat Kendaraan Dinas</label>
                            <input type="text" value="{{ $dataKendaraan->plat_nomer }}" class="form-control"
                                name="plat_nomer" id="nomorPlat" placeholder="Masukkan Nomor Plat Kendaraan Dinas">
                        </div>
                        <div class="mb-3">
                            <label for="namaPengguna" class="form-label">Nama Pengguna</label>
                            <input type="text" value="{{ $dataKendaraan->nama_pengguna }}" class="form-control"
                                name="nama_pengguna" id="namaPengguna" placeholder="Masukkan Nama Pengguna">
                        </div>
                        <div class="mb-3">
                            <label for="alamatPengguna" class="form-label">Alamat Pengguna</label>
                            <textarea class="form-control" name="alamat_pengguna" id="alamatPengguna" rows="3"
                                placeholder="Masukkan Alamat Pengguna">{{ $dataKendaraan->plat_nomer }}</textarea>
                        </div>
                        <!-- Display foto kendaraan -->
                        <div class="mb-3">
                            <label for="fotoKendaraanDinas" class="form-label">Ganti Foto Kendaraan Dinas</label>
                            <input type="file" class="form-control" name="foto_kendaraan" id="fotoKendaraanDinas">
                            <div class="mb-3 text-center">
                                <img src="{{ asset('storage/public/fotokendaraan/' . $dataKendaraan->foto_kendaraan) }}"
                                    alt="Foto Kendaraan Dinas" style="width: 500px; height: 500px; object-fit: cover;">
                            </div>
                        </div>

                        <!-- Display foto pengguna -->
                        <div class="mb-3">
                            <label for="fotoPengguna" class="form-label">Ganti Foto Pengguna</label>
                            <input type="file" class="form-control" name="foto_pengguna" id="fotoPengguna">
                            <div class="mb-3 text-center">
                                <img src="{{ asset('storage/public/fotopengguna/' . $dataKendaraan->foto_pengguna) }}"
                                    alt="Foto Pengguna" style="width: 500px; height: 500px; object-fit: cover;">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nomorTelepon" class="form-label">Nomor Telepon Pengguna</label>
                            <input type="text" value="{{ $dataKendaraan->notelpon_pengguna }}" class="form-control"
                                name="notelpon_pengguna" id="nomorTelepon" placeholder="Masukkan Nomor Telepon Pengguna">
                        </div>
                        <div class="mb-3">
                            <label for="merekKendaraan" class="form-label">Merek Kendaraan</label>
                            <input type="text" value="{{ $dataKendaraan->merek_kendaraan }}" class="form-control"
                                name="merek_kendaraan" id="merekKendaraan" placeholder="Masukkan Merek Kendaraan">
                        </div>
                        <div class="mb-3">
                            <label for="jenisKendaraan" class="form-label">Jenis Kendaraan</label>
                            <input type="text" value="{{ $dataKendaraan->jenis_kendaraan }}" class="form-control"
                                name="jenis_kendaraan" id="jenisKendaraan" placeholder="Masukkan Jenis Kendaraan">
                        </div>
                        <div class="mb-3">
                            <label for="tahunPerolehan" class="form-label">Tahun Perolehan</label>
                            <input type="text" value="{{ $dataKendaraan->tahun_perolehan }}" class="form-control"
                                name="tahun_perolehan" id="tahunPerolehan" placeholder="Masukkan Tahun Perolehan Kendaraan">
                        </div>
                        <div class="mb-3">
                            <label for="jabatanPengguna" class="form-label">Jabatan Pengguna</label>
                            <input type="text" value="{{ $dataKendaraan->jabatan_pengguna }}" class="form-control"
                                name="jabatan_pengguna" id="jabatanPengguna" placeholder="Masukkan Jabatan Pengguna">
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
