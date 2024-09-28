@extends('layout.pengguna.app')

@section('content')
<div class="top-hasil">
    <div class="row-hasil">
        <div class="hasil col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/produksi')}}">Produk



                    </a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $produk->nama_produk }}</li>
                </ol>
            </nav>
            <h1>{{ $produk->nama_produk }}</h1>
            <h6>Harga:</h6>
            <p class="price">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
            <div class="social-share">
                <a href="#" class="tombol btn-primary btn-sm"><i class="fab fa-facebook"></i></a>
                <a href="#" class="tombol btn-info btn-sm"><i class="fab fa-twitter"></i></a>
                <a href="#" class="tombol btn-success btn-sm"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="tombol btn-secondary btn-sm"><i class="fas fa-share-alt"></i></a>
                <a href="#" class="tombol btn-danger btn-sm"><i class="fas fa-heart"></i></a>
            </div>
        </div>
        <div class="img-hasil col-md-6">
            <img src="{{ asset('storage/'.$produk->foto_produk) }}" alt="{{ $produk->nama_produk }}" class="img-fluid">
        </div>
    </div>
</div>

        <div class="bottom-hasil">
            <h2>Deskripsi</h2>
            <p>{!! $produk->deskripsi_produk !!}</p>
            
            <h2>Aplikasi</h2>
            <p>{{ $produk->aplikasi }}</p>
        </div>
@endsection