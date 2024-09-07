@extends('layout.sidebar')

@section('title', 'Data Kreasi Menu')

<!-- Menambahkan gaya CSS -->
<style>
    .mt-6 {
        margin-top: 1.5rem;
        margin-right: 1.5rem;
        max-width: 100%;
    }

    .table-container {
        margin-top: 0.5rem;
        margin-left: 3.0rem;
        max-width: 100%;
    }

    table.table {
        width: 100%;
    }

    .img-fluid {
        max-width: 200px;
        height: auto;
    }

    .table-bordered td, 
    .table-bordered th {
        vertical-align: middle;
    }

    .aksi {
        white-space: nowrap;
        width: 150px;
    }

    .aksi .btn {
        display: inline-block;
        margin-right: 0px;
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
            <a class="btn btn-dark" href="{{ route('menu.create') }}">Tambah Data +</a>
        </div>
    </div>

    <div class="table-container col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nama Menu</th>
                    <th>Foto Menu</th>
                    <th>Deskripsi Menu</th>
                    <th>Resep</th>
                    <th>Langkah Pembuatan</th>
                    <th class="aksi">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tb_menu as $index => $baris)
                    <tr class="{{ $index % 2 == 0 ? 'table-warning' : 'table-light' }}">
                        <td>{{ $baris['id_menu'] }}</td>
                        <td>{{ $baris['nama_menu'] }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $baris->foto_menu) }}" alt="Menu Image" class="img-fluid">
                        </td>
                        <td>{{ $baris['deskripsi_menu'] }}</td>
                        <td>{{ $baris['resep'] }}</td>
                        <td>{{ $baris['langkah_pembuatan'] }}</td>
                        <td class="aksi">
                            <a href="{{ route('menu.edit', $baris->id_menu) }}" class="btn btn-warning text-white">Edit</a>
                            <form action="{{ route('menu.destroy', $baris->id_menu) }}" method="POST" style="display:inline-block" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <!-- Tombol hapus yang bukan type submit -->
                                <button type="button" class="btn btn-danger delete-btn">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
