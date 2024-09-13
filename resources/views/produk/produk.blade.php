@extends('layout.sidebar')

@section('title', 'Data Kreasi Produk')

<!-- Menambahkan gaya CSS -->
<style>
    .container {
        margin-top: 0.2rem; /* Kurangi jarak dari atas */
    }

    .table-container {
        margin-top: 0rem; /* Kurangi jarak tabel dari tombol */
    }

    .search-container {
        margin-bottom: 1rem;
    }

    table.table {
        width: 100%;
        table-layout: fixed; /* Agar kolom memiliki lebar tetap yang proporsional */
    }

    .img-fluid {
        max-width: 100px; /* Ukuran gambar lebih kecil */
        height: auto;
    }

    .table-bordered td,
    .table-bordered th {
        vertical-align: middle;
    }

    .table td:nth-child(1), .table th:nth-child(1) {
        width: 50px; /* Lebar kolom ID lebih kecil */
    }
    .table td:nth-child(2), .table th:nth-child(2) {
        width: 100px; /* Lebar kolom Nama Produk lebih besar */
    }
    .table td:nth-child(3), .table th:nth-child(3) {
        width: 100px; /* Lebar kolom Foto Produk */
    }
    .table td:nth-child(4), .table th:nth-child(4) {
        width: 100px; /* Lebar kolom Kategori Produk */
    }
    .table td:nth-child(5), .table th:nth-child(5) {
        width: 100px; /* Lebar kolom Harga */
    }
    .table td:nth-child(6), .table th:nth-child(6) {
        width: 150px; /* Lebar kolom Aksi lebih besar */
    }

    .aksi .btn {
        margin-right: 2px; /* Spasi antar tombol */
    }

    .text-right {
        text-align: right;
    }

    .title-container {
        text-align: center; /* Posisi teks di tengah */
        margin-bottom: 1.5rem;
    }

    .title-container h1 {
        font-size: 30px;
        margin: 0;
    }

    .action-container {
        text-align: right;
        margin-bottom: 1rem;
    }
</style>

@section('content')
<div class="container">
    <!-- Judul di tengah -->
    <div class="title-container">
        <h1>Data Produk</h1>
    </div>

    <!-- Form Pencarian dan Tombol Tambah Data di kanan -->
    <div class="action-container d-flex justify-content-between align-items-center mb-3">
        <form action="{{ route('produk.index') }}" method="GET" class="form-inline d-flex">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari Nama Produk" value="{{ request()->input('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                </div>
            </div>
        </form>
        <a class="btn btn-dark" href="{{ route('produk.create') }}">Tambah Data +</a>
    </div>

    <!-- Tabel -->
    <div class="table-container">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Foto Produk</th>
                    <th>Kategori Produk</th>
                    <th>Harga</th>
                    <th class="aksi">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tb_produk as $index => $baris)
                    <tr class="{{ $index % 2 == 0 ? 'table-warning' : 'table-light' }}">
                        <td>{{ $baris['id_produk'] }}</td>
                        <td>{{ $baris['nama_produk'] }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $baris->foto_produk) }}" alt="Produk Image" class="img-fluid">
                        </td>
                        <td>{{ $baris->kategori->nama_kategori ?? 'Kategori tidak ditemukan' }}</td>
                        <td>{{ $baris['harga'] }}</td>
                        <td class="aksi text-center">
                            <a href="{{ route('produk.detail', $baris->id_produk) }}" class="btn btn-primary">Detail</a>
                            <a href="{{ route('produk.edit', $baris->id_produk) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('produk.destroy', $baris->id_produk) }}" method="POST" style="display:inline-block" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger delete-btn">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $tb_produk->onEachSide(1)->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

<!-- Script SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Menggunakan SweetAlert2 untuk konfirmasi hapus data
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(event) {
            const form = this.closest('form'); // Dapatkan form terdekat

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan bisa mengembalikan data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Kirim form setelah konfirmasi
                    Swal.fire(
                        'Terhapus!',
                        'Data Anda telah dihapus.',
                        'success'
                    );
                }
            });
        });
    }); 
</script>
@endsection
