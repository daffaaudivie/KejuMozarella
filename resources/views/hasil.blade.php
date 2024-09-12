@extends('layout.pengguna.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/'.$produk->foto_produk) }}" alt="{{ $produk->nama_produk }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>{{ $produk->nama_produk }}</h1>
            
            <div class="social-share">
                <!-- Tambahkan tombol share sosial media di sini -->
                <a href="#" class="btn btn-primary btn-sm"><i class="fab fa-facebook"></i></a>
                <a href="#" class="btn btn-info btn-sm"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn btn-success btn-sm"><i class="fab fa-whatsapp"></i></a>
                <!-- Tambahkan tombol lainnya sesuai kebutuhan -->
            </div>
            
            <h2>Deskripsi</h2>
            <p>{{ $produk->deskripsi_produk }}</p>
            
            {{-- <h2>Aplikasi</h2>
            <p>{{ $produk->aplikasi }}</p> --}}
            
            {{-- <div class="product-info">
                <h3>Saran Penyimpanan</h3>
                <p>Suhu: {{ $produk->suhu_penyimpanan }}</p>
                <p>Masa Kedaluwarsa: {{ $produk->masa_kedaluwarsa }}</p>
                
                <h3>Tekstur dan Rasa</h3>
                <p>{{ $produk->tekstur_dan_rasa }}</p>
            </div> --}}
        </div>
    </div>
</div>
@endsection