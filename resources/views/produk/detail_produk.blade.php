@extends('layout.sidebar')

@section('title', 'Detail Produk')

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
        max-width: 100%;
        height: auto;
    }

    .btn-back {
        margin-top: 2rem;
        margin-right: 1.5rem;
    }
</style>

@section('content')
<div class="container">
    <h1 class="text-center">Detail Produk</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="img-container">
                <img src="{{ asset('storage/' . $produk->foto_produk) }}" alt="Foto Produk" class="img-fluid">
            </div>
        </div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <th>ID Produk</th>
                    <td>{{ $produk->id_produk }}</td>
                </tr>
                <tr>
                    <th>Nama Produk</th>
                    <td>{{ $produk->nama_produk }}</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>{{ $produk->kategori->nama_kategori }}</td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>{{ $produk->harga }}</td>
                </tr>
                <tr>
                    <th>Deskripsi Produk</th>
                    <td>{{ $produk->deskripsi_produk }}</td>
                </tr>
            </table>

            <div class="text-right">
                <a href="{{ route('produk.index') }}" class="btn btn-dark btn-back">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
