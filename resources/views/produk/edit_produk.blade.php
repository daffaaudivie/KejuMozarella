@extends('layout.sidebar')

@section('title', 'Edit Kreasi Produk')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center mb-4">Edit Kreasi Produk</h1>
            <form method="POST" action="{{ route('produk.update', $produk->id_produk) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')

                <!-- Nama Produk -->
                <div class="form-group mt-3">
                    <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $produk->nama_produk }}" required>
                </div>

                <!-- Foto Produk -->
                <div class="form-group mt-3">
                    <label for="foto_produk" class="col-sm-2 col-form-label">Foto Produk</label>
                    <input type="file" class="form-control" id="foto_produk" name="foto_produk" accept="image/*">
                    @if($produk->foto_produk)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $produk->foto_produk) }}" alt="Product Image" class="img-fluid" style="max-width: 300px;">
                        </div>
                    @endif
                </div>

                <!-- Kode Kategori -->
                <div class="form-group mt-3">
                    <label for="kode_kategori" class="form-label">Nama Kategori</label>
                    <select class="form-select form-control" id="kode_kategori" name="kode_kategori" required>
                        @foreach($tb_kategori as $kategori)
                            <option value="{{ $kategori->id_kategori }}" {{ $kategori->id_kategori == $produk->kode_kategori ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Harga Produk -->
                <div class="form-group mt-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga Produk</label>
                    <input type="number" step="0.01" class="form-control" id="harga" name="harga" value="{{ $produk->harga }}" required>
                </div>

                <!-- Deskripsi Produk -->
                <div class="form-group mt-3">
                    <label for="deskripsi_produk" class="col-sm-4 col-form-label">Deskripsi Produk</label>
                    <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="4" required>{{ $produk->deskripsi_produk }}</textarea>
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Update Produk</button>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-4 text-center">
        <div id="success-alert" class="alert alert-success alert-dismissible fade" role="alert" style="display: none;">
            Data berhasil diperbarui!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>

<script>
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
</script>
