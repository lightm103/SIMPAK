@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1>Dashboard</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3 me-3">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data Barang</h4>
                                    <p class="card-text">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 me-3">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Data Transaksi</h4>
                                    <p class="card-text">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
