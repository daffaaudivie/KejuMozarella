@extends('layout.sidebar')

@section('title', 'Data Kreasi Menu')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
        tinymce.init({
            selector: 'textarea#resep', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
        </script>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center mb-4">Tambah Foto Kreasi Menu</h1>
            <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data" id="myForm">
                @csrf
                    <label for="nama_menu" class="col-sm-2 col-form-label">Nama Menu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
                    </div>
                    <label for="foto_menu" class="col-sm-2 col-form-label">Foto Menu</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="foto_menu" name="foto_menu" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi_menu" class="col-sm-4 col-form-label">Deskripsi Menu</label>
                    <div class="col-sm-10">
                        <!-- Mengganti input menjadi textarea -->
                        <textarea class="form-control" id="deskripsi_menu" name="deskripsi_menu" rows="4" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="resep" class="col-sm-2 col-form-label">Resep</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="resep" name="resep" required></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="langkah_pembuatan" class="col-sm-2 col-form-label">Langkah Pembuatan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="langkah_pembuatan" name="langkah_pembuatan" required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
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

<!-- teks editor -->
<!-- Teks editor TinyMCE -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#resep, #langkah_pembuatan',
        menubar: false,
        plugins: 'lists link image charmap preview',
        toolbar: 'undo redo | formatselect | bold italic backcolor | \
                 alignleft aligncenter alignright alignjustify | \
                 bullist numlist outdent indent | removeformat | preview',
        height: 300
    });
</script>


