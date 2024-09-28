@extends('layout.sidebar')

@section('title', 'Dashboard Admin')

@section('content')

<style>
    .card-body i {
        padding: 10px;
    }
    
    .container {
        padding-left: 00px;
        padding-top: -100px;
    }

    .row {
        margin-left: 0; /* Menghilangkan margin kiri dari row */
    }

    /* Optional: Menambahkan margin agar card lebih longgar */
    .card {
        margin: 10px 0;
    }

</style>

<div class="container mt-3">
    <h1 class="mb-4 text-start">Dashboard</h1>
    <div class="row align-items-start">
        <!-- Card: Total Produk -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3 shadow-sm" style="min-height: 200px; min-width: 250px;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <i class="fas fa-boxes fa-4x"></i>
                    </div>
                    <div class="text-end">
                        <h5 class="card-title">Total Produk</h5>
                        <p class="card-text fs-4">{{ $totalProduk }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card: Total Menu -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3 shadow-sm" style="min-height: 200px; min-width: 250px;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <i class="fas fa-utensils fa-4x"></i>
                    </div>
                    <div class="text-end">
                        <h5 class="card-title">Total Menu</h5>
                        <p class="card-text fs-4">{{ $totalMenu }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card: Total Pesan -->
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3 shadow-sm" style="min-height: 200px; min-width: 250px;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <i class="fas fa-envelope fa-4x"></i>
                    </div>
                    <div class="text-end">
                        <h5 class="card-title">Total Pesan</h5>
                        <p class="card-text fs-4">{{ $totalPesan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
