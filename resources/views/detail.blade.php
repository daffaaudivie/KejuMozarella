@extends('layout.Pengguna.app')

<!-- Tambahkan CSS -->
<style>
    /* Membuat background gambar yang sama di kolom kiri dengan overlay gelap */
    .bg-image-overlay {
        background: url('{{ asset('storage/' . $menus->foto_menu) }}') no-repeat center center;
        background-size: cover; /* Membuat background menutupi seluruh kolom */
        position: relative;
    }

    .bg-image-overlay::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Ganti dengan warna dan transparansi yang diinginkan */
    z-index: 1; /* Pastikan overlay berada di atas gambar */
}

.bg-image-overlay > * {
    position: relative;
    z-index: 2; /* Konten yang berada di atas overlay */
}
    /* Memastikan teks berada di atas overlay */
    .bg-image-overlay .card-body {
        position: relative;
        z-index: 2;
    }

    /* Padding dan ukuran gambar di kolom kanan */
    .col-md-6 img {
        width: 100%; /* Menyesuaikan lebar gambar */
        padding: 100px; /* Tambahkan padding sesuai keinginan untuk memberi jarak */
    }
    .container { 
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        padding: 20px;
        max-width: 400px;
        margin: 40px auto;
    }
    .container p{
        padding-left: 30px;
    }
</style>


<div class="card w-100 position-relative bg-image-overlay">
    <div class="row no-gutters">
        <!-- Kolom Kiri untuk Teks dengan Background Gambar -->
        <div class="col-md-6 d-flex align-items-center justify-content-center text-white text-left p-4 ">
           <div>
                <p class="card-text">RECIPES</p>
                <h4 class="card-title text-uppercase">{{ $menus->nama_menu }}</h4>
                <p class="card-text">Deskripsi atau informasi lainnya.</p>
            </div>
        </div>
        <!-- Kolom Kanan untuk Gambar -->
        <div class="col-md-6 p-4">
            <img src="{{ asset('storage/' . $menus->foto_menu) }}" class="img-fluid" alt="{{ $menus->nama_menu }}">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="ingredients">
                <h2>Ingredients</h2>
                <hr>
                <ul>
                    @foreach(explode("\n", $menus->resep) as $ingredient)
                        <li>{{ $ingredient }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="instruction">
                <h2>Instruction</h2>
                <hr>
                <ol>
                    @foreach(explode("\n", $menus->langkah_pembuatan) as $step)
                        <li>{{ $step }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>

