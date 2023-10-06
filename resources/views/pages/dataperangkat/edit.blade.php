@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.dataperangkat.index') }}" class="btn btn-secondary mx-3">
                    <i class="ti ti-arrow-left me-2"></i> Back
                </a>
                <strong class="fs-5"> Edit Data Perangkat Elektronik</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.dataperangkat.update', $dataPerangkat->id) }}" method="POST" id="tambahdata"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="namaPerangkat" class="form-label">Nama Perangkat Elektronik</label>
                        <input type="text" value="{{ $dataPerangkat->nama_perangkat }}" class="form-control"
                            name="nama_perangkat" id="namaPerangkat" placeholder="Masukkan Nama Perangkat Elektronik">
                    </div>

                    <div class="mb-3">
                        <label for="namaPengguna" class="form-label">Nama Pengguna</label>
                        <input type="text" value="{{ $dataPerangkat->nama_pengguna }}" class="form-control"
                            name="nama_pengguna" id="namaPengguna" placeholder="Masukkan Nama Pengguna">
                    </div>

                    <div class="mb-3">
                        <label for="jabatanPengguna" class="form-label">Jabatan Pengguna</label>
                        <input type="text" value="{{ $dataPerangkat->jabatan_pengguna }}" class="form-control"
                            name="jabatan_pengguna" id="jabatanPengguna" placeholder="Masukkan Jabatan Pengguna">
                    </div>

                    <div class="mb-3">
                        <label for="alamatPengguna" class="form-label">Alamat Pengguna</label>
                        <input class="form-control" name="alamat_pengguna" id="alamatPengguna" rows="3"
                            placeholder="Masukkan Alamat Pengguna" value="{{ $dataPerangkat->alamat_pengguna }}">
                    </div>

                    <!-- Display foto perangkat -->
                    <div class="mb-3">
                        <label for="fotoPerangkat" class="form-label">Ganti Foto Perangkat Elektronik</label>
                        <input type="file" class="form-control" name="foto_perangkat" id="fotoPerangkat">
                        <div class="mb-3 text-center">
                            <img src="{{ asset('storage/public/fotoperangkat/' . $dataPerangkat->foto_perangkat) }}"
                                alt="Foto Perangkat" style="width: 500px; height: 500px; object-fit: cover;">
                        </div>
                    </div>

                    <!-- Display foto pengguna -->
                    <div class="mb-3">
                        <label for="fotoPenggunaPerangkat" class="form-label">Ganti Foto Pengguna Perangkat</label>
                        <input type="file" class="form-control" name="foto_pengguna" id="fotoPenggunaPerangkat">
                        <div class="mb-3 text-center">
                            <img src="{{ asset('storage/public/fotopengguna/' . $dataPerangkat->foto_pengguna) }}"
                                alt="Foto Pengguna Perangkat" style="width: 500px; height: 500px; object-fit: cover;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="nomorTelepon" class="form-label">Nomor Telepon Pengguna</label>
                        <input type="text" value="{{ $dataPerangkat->notelpon_pengguna }}" class="form-control"
                            name="notelpon_pengguna" id="nomorTelepon" placeholder="Masukkan Nomor Telepon Pengguna">
                    </div>

                    <div class="mb-3">
                        <label for="merekPerangkat" class="form-label">Merek Perangkat</label>
                        <input type="text" value="{{ $dataPerangkat->merek_perangkat }}" class="form-control"
                            name="merek_perangkat" id="merekPerangkat" placeholder="Masukkan Merek Perangkat">
                    </div>

                    <div class="mb-3">
                        <label for="tahunPerolehan" class="form-label">Tahun Perolehan</label>
                        <input type="text" value="{{ $dataPerangkat->tahun_perolehan }}" class="form-control"
                            name="tahun_perolehan" id="tahunPerolehan" placeholder="Masukkan Tahun Perolehan Perangkat">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
