@extends('layout.sidebar')

@section('title', 'Detail Pesan')

<!-- Menambahkan gaya CSS -->
<style>
    .container {
        margin-top: 0.5rem;
        position: absolute;
        justify-content: center;
        align-items: center;
    }

    .table-container {
        width: 100%;
        max-width: 1000px; /* Membatasi lebar maksimal konten */
    }

    .table {
        font-size: 1.2rem; /* Mengatur ukuran font pada tabel agar lebih besar */
        width: 100%; /* Memastikan tabel menggunakan seluruh lebar kolom */
    }

    .table th{
        vertical-align: middle;
        padding: 5rem; /* Menambah padding untuk jarak yang lebih besar */
    }

    .table td {
        vertical-align: middle;
        padding: 5rem; /* Menambah padding untuk jarak yang lebih besar */
        word-break: break-word;
    }

    .btn-back {
        margin-top: 2rem;
    
    }

    .text-right {
        text-align: center; /* Menempatkan tombol di tengah */
    }
    
</style>

@section('content')
<div class="container">
    <div class="table-container">
        <h1 class="text-center mb-4">Detail Pesan</h1>
        
        <!-- Tabel Detail -->
        <table class="table table-bordered">
            <tr>
                <th>ID Menu</th>
                <td>{{ $pesan->id_pesan }}</td>
            </tr>
            <tr>
                <th>Subjek</th>
                <td>{!! $pesan->kategori_pesan !!}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $pesan->nama }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{!! $pesan->email !!}</td>
            </tr>
            <tr>
                <th>Nomor</th>
                <td>{!! $pesan->nomor !!}</td>
            </tr>
            <tr>
                <th>Nama Perusahaan</th>
                <td>{!! $pesan->nama_perusahaan !!}</td>
            </tr>
            <tr>
                <th>Deskripsi Pesan</th>
                <td class="word-break">{!! $pesan->pesan !!}</td>
            </tr>
        </table>

        <!-- Tombol Kembali -->
        <div class="text-right">
            <a href="{{ route('pesan.index') }}" class="btn btn-dark btn-back">Kembali</a>
        </div>
    </div>
</div>
@endsection
