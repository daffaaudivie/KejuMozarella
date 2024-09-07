@extends('layout.sidebar')

@section('title', 'Data Pesan Masuk')

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
            <h1 style="font-size: 30px;">Data Pesan Masuk</h1>
        </div>
    </div>
    <!-- <div class="row mt-3"> 
        <div class="col-md-12 text-right">
            <a class="btn btn-dark" href="#">Tambah Data +</a>
        </div>
    </div> -->

    <!-- Menambahkan kelas untuk container tabel -->
    <div class="table-container">
        <table class="table table-bordered mx-auto col-md-12">
            <thead>
                <tr>
                    <th>ID Pesan</th>
                    <th>Kategori Pesan</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor</th>
                    <!-- <th>Nama Perusahaan</th> -->
                    <th>Pesan</th>
                    <th class="aksi">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tb_pesan as $index => $baris)
                    <tr class="{{ $index % 2 == 0 ? 'table-warning' : 'table-bordered' }}">
                        <td>{{ $baris['id_pesan'] }}</td>
                        <td>{{ $baris['kategori_pesan'] }}</td>
                        <td>{{ $baris['nama'] }}</td>
                        <td>{{ $baris['email'] }}</td>
                        <td>{{ $baris['nomor'] }}</td>
                        <!-- <td>{{ $baris['nama_perusahaan'] }}</td> -->
                        <td>{{ $baris['pesan'] }}</td>
                        <td class="aksi">
                            <form action="{{ route('pesan.destroy', $baris->id_pesan) }}" method="POST" style="display:inline-block" class="delete-form">
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
