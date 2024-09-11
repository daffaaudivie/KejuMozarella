@extends('layout.sidebar')

@section('title', 'Tambah Kreasi Menu')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10"> <!-- Membuat form lebih lebar -->
            <h1 class="text-center mb-4">Tambah Kreasi Menu</h1>
            <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data" id="myForm">
                @csrf
                
                <!-- Nama Menu -->
                <div class="form-group row">
                    <label for="nama_menu" class="col-md-2 col-form-label text-md-right">Nama Menu</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
                    </div>
                </div>

                <!-- Foto Menu -->
                <div class="form-group row">
                    <label for="foto_menu" class="col-md-2 col-form-label text-md-right">Foto Menu</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" id="foto_menu" name="foto_menu" accept="image/*" required>
                    </div>
                </div>

                <!-- Deskripsi Menu -->
                <div class="form-group row">
                    <label for="deskripsi_menu" class="col-md-2 col-form-label text-md-right">Deskripsi Menu</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="deskripsi_menu" name="deskripsi_menu" rows="4" required></textarea>
                    </div>
                </div>

                <!-- Resep -->
                <div class="form-group row">
                    <label for="resep" class="col-md-2 col-form-label text-md-right">Resep</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="resep" name="resep" required></textarea>
                    </div>
                </div>
                
                <!-- Langkah Pembuatan -->
                <div class="form-group row">
                    <label for="langkah_pembuatan" class="col-md-2 col-form-label text-md-right">Langkah Pembuatan</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="langkah_pembuatan" name="langkah_pembuatan" required></textarea>
                    </div>
                </div>

                <!-- Button Simpan -->
                <div class="form-group row mb-0">
                    <div class="col-md-10 offset-md-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>

            </form> <!-- Penutupan tag form yang benar berada di sini -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
    selector: 'textarea#resep, textarea#langkah_pembuatan',
    plugins: 'code table lists link image preview',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link image preview',
    menubar: false,
    height: 300,
    branding: false,
    setup: function (editor) {
        editor.on('change', function () {
            tinymce.triggerSave();  // Sync content when the editor changes
        });
    }
});

document.getElementById('myForm').addEventListener('submit', function (event) {
    console.log('Form submit event triggered');
    tinymce.triggerSave();  // Sync the TinyMCE content before submitting the form
    console.log('TinyMCE content synced');

});

</script>
@endsection
