<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Topic Listing Bootstrap 5 Template</title>
    <link href="{{ asset('tema/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/css/templatemo-topic-listing.css') }}" rel="stylesheet">
</head>

<body id="top">

    <main>
        <!-- ... Navbar tetap sama ... -->

        <section class="hero-section bg-primary text-white text-center py-5" id="section_1">
            <div class="container">
                <h1>Pantau</h1>
                <h6>Platform Untuk Mengecek</h6>

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
            </div>
        </section>

        <!-- ... Bagian featured section tetap sama ... -->

        <script src="{{ asset('tema/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('tema/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('tema/js/custom.js') }}"></script>


    </main>
</body>

</html>
