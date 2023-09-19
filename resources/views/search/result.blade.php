<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Search Results</h1>

        <div class="container-fluid">
            @if ($searchType === 'dataperangkats')
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <a href="{{ url('/') }}" class="btn btn-light mx-3">
                            <i class="fa fa-arrow-left me-2"></i> Back to Home
                        </a>
                        <strong> Informasi Perangkat Elektronik</strong>
                    </div>
                    <div class="card-body">
                        @foreach ($dataPerangkats as $dataPerangkat)
                            <h2>{{ $dataPerangkat->nama_perangkat }}</h2>
                            <p>Nama Pengguna: {{ $dataPerangkat->nama_pengguna }}</p>
                            <p>Jabatan Pengguna: {{ $dataPerangkat->jabatan_pengguna }}</p>
                            <p>Alamat Pengguna: {{ $dataPerangkat->alamat_pengguna }}</p>
                            <p>Merek Perangkat: {{ $dataPerangkat->merek_perangkat }}</p>
                            <p>Tahun Perolehan: {{ $dataPerangkat->tahun_perolehan }}</p>
                            <p>Foto Pengguna: <img src="{{ url('storage/fotopengguna/' . $dataPerangkat->foto_pengguna) }}"
                                alt="" style="width: 200px; height: 200px; object-fit: cover;"
                                srcset=""></p>
                            <p>Foto Perangkat : <img
                                    src="{{ url('storage/fotoperangkat/' . $dataPerangkat->foto_perangkat) }}"
                                    alt="" style="width: 200px; height: 200px; object-fit: cover;"
                                    srcset=""></p>
                            <hr>
                        @endforeach
                    </div>
                </div>
            @elseif ($searchType === 'datakendaraans')
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <a href="{{ url('/') }}" class="btn btn-light mx-3">
                            <i class="fa fa-arrow-left me-2"></i> Back to Welcome Page
                        </a>
                        <strong> Informasi Kendaraan Dinas</strong>
                    </div>
                    <div class="card-body">
                        @foreach ($dataKendaraans as $dataKendaraan)
                            <h2>{{ $dataKendaraan->plat_nomer }}</h2>
                            <p>Nama Pengguna: {{ $dataKendaraan->nama_pengguna }}</p>
                            <p>Jabatan Pengguna: {{ $dataKendaraan->jabatan_pengguna }}</p>
                            <p>Alamat Pengguna: {{ $dataKendaraan->alamat_pengguna }}</p>
                            <p>Merek Kendaraan: {{ $dataKendaraan->merek_kendaraan }}</p>
                            <p>Tahun Perolehan: {{ $dataKendaraan->tahun_perolehan }}</p>
                            <p>Foto Pengguna: <img
                                    src="{{ url('storage/fotokendaraan/' . $dataKendaraan->foto_kendaraan) }}"
                                    alt="" style="width: 200px; height: 200px; object-fit: cover;"
                                    srcset=""></p>
                            <p>Foto Kendaraan: <img
                                    src="{{ url('storage/fotopengguna/' . $dataKendaraan->foto_pengguna) }}"
                                    alt="" style="width: 200px; height: 200px; object-fit: cover;"
                                    srcset=""></p>
                            <hr>
                        @endforeach
                    </div>
                </div>
            @else
                <p class="alert alert-danger">No results found for the type: {{ $searchType }}</p>
            @endif
        </div>

    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
