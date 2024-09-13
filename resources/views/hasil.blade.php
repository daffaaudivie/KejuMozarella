@extends('layout.pengguna.app')

@section('content')
<div class="container-hasil">
    <div class="row-hasil">
        <div class="hasil col-md-6">
            <h1>{{ $produk->nama_produk }}</h1>
            <div class="social-share">
                
                <a href="#" class="tombol btn-primary btn-sm"><i class="fab fa-facebook"></i></a>
                <a href="#" class="tombol btn-info btn-sm"><i class="fab fa-twitter"></i></a>
                <a href="#" class="tombol btn-success btn-sm"><i class="fab fa-whatsapp"></i></a>
                
            </div>
            <h2>Deskripsi</h2>
            <p>{{ $produk->deskripsi_produk }}</p>
        </div>
        <div class="img-hasil col-md-6">
            <img src="{{ asset('storage/'.$produk->foto_produk) }}" alt="{{ $produk->nama_produk }}" class="img-fluid">
        </div>
    </div>
</div>
@endsection