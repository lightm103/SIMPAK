@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.pajak.index') }}" class="btn btn-secondary mx-3">
                <i class="ti ti-arrow-left me-2"></i> Back
            </a>
            <strong class="fs-5"> Edit Data Pajak Kendaraan</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pajak.update', $data->id) }}" method="POST" id="editDataPajak" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="namaPemilik" class="form-label">Nama Pemilik</label>
                    <input type="text" value="{{ $data->nama_pemilik }}" class="form-control"
                        name="nama_pemilik" id="namaPemilik" placeholder="Masukkan Nama Pemilik">
                </div>

                <div class="mb-3">
                    <label for="platNomer" class="form-label">Plat Nomor</label>
                    <input type="text" value="{{ $data->plat_nomer }}" class="form-control"
                        name="plat_nomer" id="platNomer" placeholder="Masukkan Plat Nomor">
                </div>

                <div class="mb-3">
                    <label for="emailPemilik" class="form-label">Email Pemilik</label>
                    <input type="email" value="{{ $data->email_pemilik }}" class="form-control"
                        name="email_pemilik" id="emailPemilik" placeholder="Masukkan Email Pemilik">
                </div>

                <div class="mb-3">
                    <label for="tanggalBerakhirPajak" class="form-label">Tanggal Berakhir Pajak</label>
                    <input type="date" value="{{ $data->tanggal_berakhir_pajak }}" class="form-control"
                        name="tanggal_berakhir_pajak" id="tanggalBerakhirPajak">
                </div>

                <div class="mb-3">
                    <label for="alamatPemilik" class="form-label">Alamat Pemilik</label>
                    <textarea class="form-control" name="alamat_pemilik" id="alamatPemilik" rows="3"
                        placeholder="Masukkan Alamat Pemilik">{{ $data->alamat_pemilik }}</textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
