@extends('layout.sidebar')

@section('title', 'Detail Menu')

<!-- Menambahkan gaya CSS -->
<style>
    .container {
        margin-top: 2rem;
    }

    .img-container {
        text-align: center;
        margin-bottom: 2rem;
    }

    .img-fluid {
        max-width: 250px; 
    }

    .table {
        font-size: 1rem; 
        width: 100%; 
    }

    .table th, .table td {
        vertical-align: middle;
    }

    .btn-back {
        margin-top: 2rem;
    }

    .text-right {
        text-align: right;
    }
</style>

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Detail Menu</h1>

    <div class="row">
        <!-- Kolom Foto -->
        <div class="col-md-4">
            <div class="img-container">
                <img src="{{ asset('storage/' . $menu->foto_menu) }}" alt="Foto Menu" class="img-fluid">
            </div>
        </div>

        <!-- Kolom Detail -->
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <th>ID Menu</th>
                    <td>{{ $menu->id_menu }}</td>
                </tr>
                <tr>
                    <th>Nama Menu</th>
                    <td>{{ $menu->nama_menu }}</td>
                </tr>
                <tr>
                    <th>Deskripsi Menu</th>
                    <td>{!! $menu->deskripsi_menu !!}</td>
                </tr>
                <tr>
                    <th>Resep</th>
                    <td>{!! $menu->resep !!}</td>
                </tr>
                <tr>
                    <th>Langkah Pembuatan</th>
                    <td>{!! $menu->langkah_pembuatan !!}</td>
                </tr>
            </table>

            <div class="text-right">
                <a href="{{ route('menu.index') }}" class="btn btn-dark btn-back">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
