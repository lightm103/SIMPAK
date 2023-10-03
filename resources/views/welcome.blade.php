<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMPAK</title>
    <link href="{{ asset('tema/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/css/templatemo-topic-listing.css') }}" rel="stylesheet">
</head>

<body id="top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.login') }}">Admin Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <!-- Bagian Hero -->
        <section class="hero-section bg-primary text-white text-center py-5" id="section_1">
            <br>
            <br>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/logos/khhebat.png') }}" style="width: 20%" alt="Logo">    
            </a>
            <div class="container">
                <h1>SIMPAK</h1>
                <h3>Sistem Pengamanan Aset Bergerak</h3>
                <h3>Sekretariat Daerah Kabupaten Kapuas Hulu</h3>

                <form id="searchForm" action="{{ route('searchData') }}" method="GET" class="mt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="search_type" class="form-label">Cari Berdasarkan:</label>
                            <select name="search_type" id="search_type" class="form-control">
                                <option value="datakendaraans">Data Kendaraan</option>
                                <option value="dataperangkats">Data Perangkat</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="keyword" class="form-label">Kata Kunci:</label>
                            <input type="text" name="keyword" id="keyword" class="form-control">
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="submit" class="btn btn-success">Cari</button>
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <br>
            </div>
        </section>

        <!-- ... Bagian featured section tetap sama ... -->

        <script src="{{ asset('tema/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('tema/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('tema/js/custom.js') }}"></script>

    </main>
</body>

</html>
