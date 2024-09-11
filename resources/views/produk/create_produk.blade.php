@extends('layout.sidebar')

@section('title', 'Data Kreasi Produk')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mb-4">Tambah Produk</h1>
            <form method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data" id="myForm">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                </div>

                <div class="form-group mb-3">
                    <label for="foto_produk" class="form-label">Foto Produk</label>
                    <input type="file" class="form-control" id="foto_produk" name="foto_produk" accept="image/*" required>
                </div>

                 <div class="mb-3">
                    <label for="kode_kategori" class="form-label">Nama Kategori</label>
                        <select class="form-select form-control" id="kode_kategori" name="kode_kategori" required>
                        <option value="" selected disabled>Pilih Kategori</option>
                        @foreach($tb_kategori as $a)
                            <option value="{{ $a->id_kategori }}">{{ $a->nama_kategori }}</option>
                        @endforeach
                        </select>
                    </div> 
                <div class="form-group mb-3">
                    <label for="harga" class="form-label">Harga Produk</label>
                    <input type="text" class="form-control" id="harga" name="harga" required>
                </div>

                <div class="form-group mb-3">
                    <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                    <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="4" required></textarea>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-4 text-center">
        <div id="success-alert" class="alert alert-success alert-dismissible fade" role="alert" style="display: none;">
            Data berhasil ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>

<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('#myForm');
        const successAlert = document.getElementById('success-alert');

        form.addEventListener('submit', function (e) {
            successAlert.classList.add('fade');
            successAlert.style.display = 'block';

            e.preventDefault();

            setTimeout(function () {
                successAlert.classList.remove('fade');
                successAlert.style.display = 'none';
                form.submit();
            }, 2000);
        });
    });
</script> -->
