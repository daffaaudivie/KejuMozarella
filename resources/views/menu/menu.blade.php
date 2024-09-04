@extends('layout.sidebar')

@section('title', 'Data Kreasi Menu')

<!-- Menambahkan gaya CSS -->
<style>
    .mt-6 {
        margin-top: 1.5rem; /* Sesuaikan nilai margin-top sesuai kebutuhan */
        margin-right: 1.5rem;
    }

    .table-container {
        margin-top: 0.5rem; /* Sesuaikan nilai margin-top sesuai kebutuhan */
        margin-left: 3.0rem;
    }
</style>

<div class="container mt-6">
<div class="row">
        <div class="col-md-12 text-center">
            <h1 style="font-size: 30px;">Kreasi Menu</h1>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12 text-right">
            <a class="btn btn-success" href="{{ route('menu.create') }}">Tambah Data +</a>
        </div>
    </div>

    <!-- Menambahkan kelas untuk container tabel -->
    <div class="table-container">
        <table class="table table-bordered mx-auto">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Menu</th>
                    <th>Foto Menu</th>
                    <th>Deskripsi Menu</th>
                    <th>Resep</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tb_menu as $index => $baris)
                    <tr class="{{ $index % 2 == 0 ? 'table-success' : 'table-light' }}">
                        <td>{{ $baris['id_menu'] }}</td>
                        <td>{{ $baris['nama_menu'] }}</td>
                        <td>
                            <!-- Menggunakan class 'img-fluid' untuk membuat gambar responsif -->
                            <img src="{{ asset('storage/' . $baris->foto_menu) }}" alt="Menu Image" class="img-fluid" style="max-width: 100%; height: auto; max-width: 300px;">
                        </td>
                        <td>{{ $baris['deskripsi_menu'] }}</td>
                        <td>{{ $baris['resep'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
</div>

<script>
    function hapusData(id) {
        if (confirm("Apakah Anda yakin ingin menghapus data?")) {
            alert("Data dengan ID " + id + " berhasil dihapus.");
        }
    }
</script>
