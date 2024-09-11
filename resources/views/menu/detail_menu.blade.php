@extends('layout.sidebar')

@section('title', 'Detail Menu')

<!-- Menambahkan gaya CSS -->
<style>
    .container {
        margin-top: 2rem;
        margin-left: 3rem;
    }

    .img-container {
        text-align: center;
        margin-bottom: 2rem;
    }

    .img-fluid {
        max-width: 100px;
        height: 100px;
    }

    .btn-back {
        margin-top: 2rem;
        margin-right: 1.5rem;
    }
    .baris{
        padding: 300px;
    }
</style>

@section('content')
<div class="container">
    <h1 class="text-center">Detail Menu</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="img-container">
                <img src="{{ asset('storage/' . $menu->foto_menu) }}" alt="Foto Menu" class="img-fluid" style="max-width: 350px; height: auto;" >
            </div>
        </div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr class="baris col">
                    <th>ID Menu</th>
                    <td>{{ $menu->id_menu }}</td>
                </tr>
                <tr>
                    <th>Nama Menu</th>
                    <td>{{ $menu->nama_menu }}</td>
                </tr>
                <tr>
                    <th>Deskripsi Menu</th>
                    <td>{{ $menu->deskripsi_menu }}</td>
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
