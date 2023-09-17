@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="ti ti-md ti-square-plus me-1 fs-4"></i>Tambah Data Pajak
                    </button>
                </div>
                <div class="card-body">
                    <h4 class="card-title mb-3">Data Pajak Kendaraan</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pemilik</th>
                                    <th>Plat Nomor</th>
                                    <th>Email Pemilik</th>
                                    <th>Tanggal Berakhir Pajak</th>
                                    <th>Alamat Pemilik</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataPajaks as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_pemilik }}</td>
                                        <td>{{ $item->plat_nomer }}</td>
                                        <td>{{ $item->email_pemilik }}</td>
                                        <td>{{ $item->tanggal_berakhir_pajak }}</td>
                                        <td>{{ $item->alamat_pemilik }}</td>
                                        <td>
                                            <div class="action-btn d-flex align-items-center justify-content-center">
                                                <a class="text-light btn btn-primary mx-1"
                                                    href="{{ route('pajak.edit', $item->id) }}">
                                                    <i class="ti ti-edit fs-5">Edit</i>
                                                </a>
                                                <form class="" action="{{ route('pajak.destroy', $item->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-icon mx-1" type="submit"
                                                        data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                        data-bs-placement="top" data-bs-html="true" title="Hapus Data">
                                                        <i class="ti ti-trash fs-5">Delete</i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ... (kode untuk modal bisa disesuaikan juga sesuai kolom pada tabel Pajak) -->
    <!-- Modal for Tambah Data Pajak -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pajak Kendaraan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pajak.store') }}" method="POST" id="tambahDataPajak"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="namaPemilik" class="form-label">Nama Pemilik</label>
                            <input type="text" class="form-control" name="nama_pemilik" id="namaPemilik"
                                placeholder="Masukkan Nama Pemilik">
                        </div>
                        <div class="mb-3">
                            <label for="platNomer" class="form-label">Plat Nomor</label>
                            <input type="text" class="form-control" name="plat_nomer" id="platNomer"
                                placeholder="Masukkan Plat Nomor">
                        </div>
                        <div class="mb-3">
                            <label for="emailPemilik" class="form-label">Email Pemilik</label>
                            <input type="email" class="form-control" name="email_pemilik" id="emailPemilik"
                                placeholder="Masukkan Email Pemilik">
                        </div>
                        <div class="mb-3">
                            <label for="tanggalBerakhirPajak" class="form-label">Tanggal Berakhir Pajak</label>
                            <input type="date" class="form-control" name="tanggal_berakhir_pajak"
                                id="tanggalBerakhirPajak">
                        </div>
                        <div class="mb-3">
                            <label for="alamatPemilik" class="form-label">Alamat Pemilik</label>
                            <textarea class="form-control" name="alamat_pemilik" id="alamatPemilik" rows="3"
                                placeholder="Masukkan Alamat Pemilik"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="tambahDataPajak" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
