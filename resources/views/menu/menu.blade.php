@extends('layout.sidebar')

@section('title', 'Data Kreasi Menu')

<!--CSS -->
<style>
    .container {
        margin-top: 0.2rem; 
    }

    .table-container {
        margin-top: 0rem; 
    }

    .search-container {
        margin-bottom: 1rem;
    }

    table.table {
        width: 100%;
        table-layout: fixed; 
    }

    .img-fluid {
        max-width: 100px; 
        height: auto;
    }

    .table-bordered td,
    .table-bordered th {
        vertical-align: middle;
    }

    .table td:nth-child(1), .table th:nth-child(1) {
        width: 50px; 
    }
    .table td:nth-child(2), .table th:nth-child(2) {
        width: 100px; 
    }
    .table td:nth-child(3), .table th:nth-child(3) {
        width: 150px; 
    }
    .table td:nth-child(4), .table th:nth-child(4) {
        width: 400px; 
        word-break: break-word;
    }

    .table td:nth-child(5), .table th:nth-child(5) {
        width: 200px; 
    }

    .aksi .btn {
        margin-right: 2px; 
    }

    .text-right {
        text-align: right;
    }

    .title-container {
        text-align: center; 
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
<div class="container col-lg-12">
    <!-- Judul di tengah -->
    <div class="title-container">
        <h1>Kreasi Menu</h1>
    </div>

    <!-- Form Pencarian -->
        <div class="action-container d-flex justify-content-between align-items-center mb-3">
            <form action="{{ route('menu.index') }}" method="GET" class="form-inline d-flex">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Cari Nama Menu" value="{{ request()->input('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
            <a class="btn btn-dark" href="{{ route('menu.create') }}">Tambah Data +</a>
        </div>


    <!-- Tabel -->
    <div class="table-container">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nama Menu</th>
                    <th>Foto Menu</th>
                    <th>Deskripsi Menu</th>
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
                        <td>{!! $baris->deskripsi_menu !!}</td>
                        <td class="aksi text-center">
                            <a href="{{ route('menu.detail', $baris->id_menu) }}" class="btn btn-primary">Detail</a>
                            <a href="{{ route('menu.edit', $baris->id_menu) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('menu.destroy', $baris->id_menu) }}" method="POST" style="display:inline-block" class="delete-form">
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
            {{ $tb_menu->onEachSide(1)->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

<!-- Script SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(event) {
            const form = this.closest('form'); 

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
