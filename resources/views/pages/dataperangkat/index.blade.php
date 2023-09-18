@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="ti ti-md ti-square-plus me-1 fs-4"></i>Tambah Data
                    </button>
                </div>
                <div class="card-body">
                    <h4 class="card-title mb-3">Data Kendaraan Dinas</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Perangkat Elektronik</th>
                                    <th>Nama Pengguna</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataPerangkats as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->nama_perangkat}}</td>
                                        <td>{{$item->nama_pengguna}}</td>
                                        <td>
                                            <div class="action-btn d-flex align-items-center justify-content-center">
                                                <a class="text-light btn btn-primary mx-1"
                                                    href="{{ route('admin.dataperangkat.edit', $item->id)}}">
                                                    <i class="ti ti-edit fs-5">Edit</i>
                                                </a>
                                                <a class="text-light btn btn-secondary mx-1"
                                                    href="{{ route('admin.dataperangkat.show', $item->id)}}">
                                                    <i class="ti ti-eye fs-5">Show</i>
                                                </a>
                                                <form class=""
                                                    action="{{ route('admin.dataperangkat.destroy', $item->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-icon mx-1" type="submit"
                                                        data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                        data-bs-placement="top" data-bs-html="true" title="Hapus User">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Perangkat Elektronik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" id="tambahbarang"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="nomorPlat" class="form-label">Nama Perangkat Elektronik</label>
                                <input type="text" class="form-control" name="nama_perangkat" id="nomorPlat"
                                    placeholder="Masukkan Nomor Plat Kendaraan Dinas">
                            </div>
                            <div class="mb-3">
                                <label for="namaPengguna" class="form-label">Nama Pengguna</label>
                                <input type="text" class="form-control" name="nama_pengguna" id="namaPengguna"
                                    placeholder="Masukkan Nama Pengguna">
                            </div>
                            <div class="mb-3">
                                <label for="alamatPengguna" class="form-label">Alamat Pengguna</label>
                                <textarea class="form-control" name="alamat_pengguna" id="alamatPengguna" rows="3"
                                    placeholder="Masukkan Alamat Pengguna"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="fotoKendaraanDinas" class="form-label">Pilih Foto Perangkat Elektronik</label>
                                <input type="file" class="form-control" name="foto_perangkat" id="fotoKendaraanDinas"
                                    aria-describedby="fotoKendaraanDinasHelp">
                                <div id="fotoKendaraanDinasHelp" class="form-text">Upload foto kendaraan dinas di sini.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="fotoPengguna" class="form-label">Pilih Foto Pengguna</label>
                                <input type="file" class="form-control" name="foto_pengguna" id="fotoPengguna"
                                    aria-describedby="fotoPenggunaHelp">
                                <div id="fotoPenggunaHelp" class="form-text">Upload foto pengguna di sini.</div>
                            </div>
                            <div class="mb-3">
                                <label for="nomorTelepon" class="form-label">Nomor Telepon Pengguna</label>
                                <input type="text" class="form-control" name="notelpon_pengguna" id="nomorTelepon"
                                    placeholder="Masukkan Nomor Telepon Pengguna">
                            </div>
                            <div class="mb-3">
                                <label for="merekKendaraan" class="form-label">Merek Perangkat Elektronik</label>
                                <input type="text" class="form-control" name="merek_perangkat" id="merekKendaraan"
                                    placeholder="Masukkan Merek Kendaraan">
                            </div>
                            <div class="mb-3">
                                <label for="tahunPerolehan" class="form-label">Tahun Perolehan</label>
                                <input type="text" class="form-control" name="tahun_perolehan" id="tahunPerolehan"
                                    placeholder="Masukkan Tahun Perolehan Kendaraan">
                            </div>
                            <div class="mb-3">
                                <label for="jabatanPengguna" class="form-label">Jabatan Pengguna</label>
                                <input type="text" class="form-control" name="jabatan_pengguna" id="jabatanPengguna"
                                    placeholder="Masukkan Jabatan Pengguna">
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="tambahbarang" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
