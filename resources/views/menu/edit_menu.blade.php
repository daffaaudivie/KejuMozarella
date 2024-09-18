@extends('layout.sidebar')

@section('title', 'Edit Kreasi Menu')

@section('content')
<div class="container mt-0">
    <div class="row">
        <div class="col-md-10 mx-auto justify-content-center">
            <h1 class="text-center mb-4">Edit Kreasi Menu</h1>
            <form method="POST" action="{{ route('menu.update', $menu->id_menu) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="nama_menu" class="col-form-label">Nama Menu</label>
                    <div class="col-md-12">
                    <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="{{ $menu->nama_menu }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="foto_menu" class="col-form-label">Foto Menu</label>
                    <div class="col-md-12">
                    <input type="file" class="form-control" id="foto_menu" name="foto_menu" accept="image/*">
                    @if($menu->foto_menu)
                        <div class="mt-2 col-md-12">
                            <img src="{{ asset('storage/' . $menu->foto_menu) }}" alt="Menu Image" class="img-fluid" style="max-width: 300px;">
                        </div>
                    @endif
                </div>
                </div>

                <div class="form-group row">
                    <label for="deskripsi_menu" class="col-form-label">Deskripsi Menu</label>
                    <div class="col-md-12">
                    <textarea class="form-control" id="deskripsi_menu" name="deskripsi_menu" rows="3" required>{{ $menu->deskripsi_menu }}</textarea>
                </div> </div>

                <div class="form-group row">
                    <label for="resep" class="col-form-label">Resep</label>
                    <div class="col-md-12">
                    <textarea class="form-control" id="resep" name="resep" rows="3" required>{{ $menu->resep }}</textarea>
                </div> </div>

                <div class="form-group row">
                    <label for="langkah_pembuatan" class="col-form-label">Langkah Pembuatan</label>
                    <div class="col-md-12">
                    <textarea class="form-control" id="langkah_pembuatan" name="langkah_pembuatan" rows="3" required>{{ $menu->langkah_pembuatan }}</textarea>
                    </div> </div>

                <div class="form-group">
                    <div class="text-center mb-2">
                        <button type="submit" class="btn btn-primary">Update Menu</button>
                    </div>
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
                tinymce.triggerSave(); 
            });
        }
    });

    document.getElementById('myForm').addEventListener('submit', function (event) {
        tinymce.triggerSave(); 
    });
</script>
@endsection
