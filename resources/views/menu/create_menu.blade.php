@extends('layout.sidebar')

@section('title', 'Tambah Kreasi Menu')

@section('content')
<div class="container mt-0">
    <div class="row justify-content-center">
        <div class="col-md-10"> <!-- Membuat form lebih lebar -->
            <h1 class="text-center mb-2">Tambah Kreasi Menu</h1>
            <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data" id="myForm">
                @csrf

                <!-- Nama Menu -->
                <div class="form-group row">
                    <label for="nama_menu" class="col-md-2 col-form-label text-md-start">Nama Menu</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
                    </div>
                </div>

                <!-- Foto Menu -->
                <div class="form-group row">
                    <label for="foto_menu" class="col-md-2 col-form-label text-md-start">Foto Menu</label>
                    <div class="col-md-12">
                        <input type="file" class="form-control" id="foto_menu" name="foto_menu" accept="image/*" required>
                    </div>
                </div>

                <!-- Deskripsi Menu -->
                <div class="form-group row">
                    <label for="deskripsi_menu" class="col-md-2 col-form-label text-md-right">Deskripsi Menu</label>
                    <div class="col-md-12">
                        <textarea class="form-control" id="deskripsi_menu" name="deskripsi_menu" rows="4" required></textarea>
                    </div>
                </div>

                <!-- Resep -->
                <div class="form-group row">
                    <label for="resep" class="col-md-12 col-form-label text-md-start">Resep</label>
                    <div class="col-md-12">
                        <textarea class="form-control" id="resep" name="resep" required></textarea>
                    </div>
                </div>

                <!-- Langkah Pembuatan -->
                <div class="form-group row">
                    <label for="langkah_pembuatan" class="col-md-12 col-form-label text-md-start">Langkah Pembuatan</label>
                    <div class="col-md-12">
                        <textarea class="form-control" id="langkah_pembuatan" name="langkah_pembuatan" required></textarea>
                    </div>
                </div>

                {{-- harga --}}
                <div class="form-group row">
                    <label for="langkah_pembuatan" class="col-md-12 col-form-label text-md-start">Harga</label>
                    <div class="col-md-12">
                        <textarea class="form-control" id="harga" name="harga" required></textarea>
                    </div>
                </div>

                <!-- Button Simpan -->
                <div class="form-group">
                    <div class="text-center mb-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: 'textarea#resep, textarea#langkah_pembuatan, textarea#deskripsi_menu',
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
</script>
@endsection
