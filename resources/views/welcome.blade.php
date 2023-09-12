<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Topic Listing Bootstrap 5 Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="{{ asset('tema/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('tema/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('tema/css/templatemo-topic-listing.css') }}" rel="stylesheet">
    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
</head>

<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <i class="bi-back"></i>
                    <span>Topic</span>
                </a>

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="{{ route('dashboard')}}" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Pantau</h1>

                        <h6 class="text-center">Platform Untuk Mengecek</h6>

                        <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-search" id="basic-addon1">
                                </span>
                                <input name="keyword" type="search" class="form-control" id="search"
                                    placeholder="Plat Nomer, Nama Pengguna, Nama Perangkat Elektronik ..." aria-label="Search">

                                <button type="submit" class="form-control">Search</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


        <section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="topics-detail.html">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Data Perangkat Elektronik</h5>

                                        <p class="mb-0">When you search for free CSS templates, you will notice that
                                            TemplateMo is one of the best websites.</p>
                                    </div>
                                </div>

                                <img src="{{ asset('tema/images/topics/undraw_Remote_design_team_re_urdx.png')}}"
                                    class="custom-block-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="topics-detail.html">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">Data Kendaraan Dinas</h5>

                                        <p class="mb-0">When you search for free CSS templates, you will notice that
                                            TemplateMo is one of the best websites.</p>
                                    </div>
                                </div>

                                <img src="{{ asset('tema/images/topics/undraw_Remote_design_team_re_urdx.png')}}"
                                    class="custom-block-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
    <!-- JAVASCRIPT FILES -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('tema/js/jquery.min.js') }}"></script>
    <script src="{{ asset('tema/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('tema/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('tema/js/click-scroll.js') }}"></script>
    <script src="{{ asset('tema/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript">
        var route = "{{ url('search') }}";

        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    console.log(data);
                    return process(data);
                });
            }
        });
    </script>   

</body>

</html>
