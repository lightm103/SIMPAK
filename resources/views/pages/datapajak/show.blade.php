@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.datapajak.index') }}" class="btn btn-secondary mx-3">
                <i class="ti ti-arrow-left me-2"></i> Back
            </a>
            <strong class="fs-5">Informasi Pajak Kendaraan</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Kolom 1 -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="namaPemilik" class="form-label">Nama Pemilik</label>
                        <input type="text" value="{{ $dataPajak->nama_pemilik }}"
                            class="form-control" name="nama_pemilik" id="namaPemilik"
                            placeholder="Masukkan Nama Pemilik" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="platNomer" class="form-label">Plat Nomor</label>
                        <input type="text" value="{{ $dataPajak->plat_nomer }}"
                            class="form-control" name="plat_nomer" id="platNomer"
                            placeholder="Masukkan Plat Nomor" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="emailPemilik" class="form-label">Email Pemilik</label>
                        <input type="text" value="{{ $dataPajak->email_pemilik }}"
                            class="form-control" name="email_pemilik" id="emailPemilik"
                            placeholder="Masukkan Email Pemilik" disabled>
                    </div>
                </div>
                <!-- Kolom 2 -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggalBerakhirPajak" class="form-label">Tanggal Berakhir Pajak</label>
                        <input type="text" value="{{ $dataPajak->tanggal_berakhir_pajak }}"
                            class="form-control" name="tanggal_berakhir_pajak" id="tanggalBerakhirPajak"
                            placeholder="Tanggal Berakhir Pajak" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="alamatPemilik" class="form-label">Alamat Pemilik</label>
                        <textarea class="form-control" name="alamat_pemilik" id="alamatPemilik" rows="3"
                            placeholder="Masukkan Alamat Pemilik" disabled>{{ $dataPajak->alamat_pemilik }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
