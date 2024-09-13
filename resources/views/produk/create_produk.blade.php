@extends('layout.sidebar')

@section('title', 'Tambah Produk')

@section('content')
<div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-md-10"> <!-- Membuat form lebih lebar -->
            <h1 class="text-center mb-4">Tambah Produk</h1>
            <form method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data" id="myForm">
                @csrf

                <!-- Nama Produk -->
                <div class="form-group row">
                    <label for="nama_produk" class="col-md-2 col-form-label text-md-start">Nama Produk</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                    </div>
                </div>

                <!-- Foto Produk -->
                <div class="form-group row">
                    <label for="foto_produk" class="col-md-3 col-form-label text-md-start">Foto Produk</label>
                    <div class="col-md-12">
                        <input type="file" class="form-control" id="foto_produk" name="foto_produk" accept="image/*" required>
                    </div>
                </div>

                <!-- Kategori Produk -->
                <div class="form-group row">
                    <label for="kode_kategori" class="col-md-3 col-form-label text-md-start">Nama Kategori</label>
                    <div class="col-md-12">
                        <select class="form-select form-control" id="kode_kategori" name="kode_kategori" required>
                            <option value="" selected disabled>Pilih Kategori</option>
                            @foreach($tb_kategori as $a)
                                <option value="{{ $a->id_kategori }}">{{ $a->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Harga Produk -->
                <div class="form-group row">
                    <label for="harga" class="col-md-3 col-form-label text-md-start">Harga Produk</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Tulis Angka Saja" required>
                    </div>
                </div>

                <!-- Deskripsi Produk -->
                <div class="form-group row">
                    <label for="deskripsi_produk" class="col-md-3 col-form-label text-md-start">Deskripsi Produk</label>
                    <div class="col-md-12">
                        <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="4" required></textarea>
                    </div>
                </div>

                <!-- Button Simpan -->
                <div class="form-group row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
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
@endsection

@section('scripts')
<script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: 'textarea#deskripsi_produk',
        plugins: 'code table lists link image preview',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link image preview',
        menubar: false,
        height: 300,
        branding: false,
        setup: function (editor) {
            editor.on('change', function () {
                tinymce.triggerSave(); // Sync content when the editor changes
            });
        }
    });

    document.getElementById('myForm').addEventListener('submit', function (event) {
        tinymce.triggerSave(); // Sync the TinyMCE content before submitting the form
    });

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
@endsection
