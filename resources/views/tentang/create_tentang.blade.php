@extends('layout.sidebar')

@section('title', 'Tambah Data Tentang Kami')

@section('content')
<div class="container mt-0">
    <div class="row justify-content-center">
        <div class="col-md-10"> <!-- Membuat form lebih lebar -->
            <h1 class="text-center mb-2">Tambah Data Tentang Kami</h1>
            <form method="POST" action="{{ route('tentang_admin.store') }}" enctype="multipart/form-data" id="myForm">
                @csrf

                <!-- Deskripsi -->
                <div class="form-group row">
                    <label for="deskripsi" class="col-md-2 col-form-label text-md-start">Deskripsi</label>
                    <div class="col-md-12">
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
                    </div>
                </div>

                <!-- Foto -->
                <div class="form-group row">
                    <label for="foto_tentang" class="col-md-2 col-form-label text-md-start">Foto</label>
                    <div class="col-md-12">
                        <input type="file" class="form-control" id="foto_tentang" name="foto_tentang" accept="image/*" required>
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
        selector: 'textarea#deskripsi',
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
