@extends('layout.sidebar')

@section('title', 'Edit Data Tentang Kami')

@section('content')
<div class="container mt-0">
    <div class="row">
        <div class="col-md-10 mx-auto justify-content-center">
            <h1 class="text-center mb-4">Edit Data Tentang Kami</h1>
            <form method="POST" action="{{ route('tentang_admin.update', $tentang->id_tentang) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                    <div class="col-md-12">
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $tentang->deskripsi }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="foto_tentang" class="col-form-label">Foto Tentang</label>
                    <div class="col-md-12">
                        <input type="file" class="form-control" id="foto_tentang" name="foto_tentang" accept="image/*">
                        @if($tentang->foto_tentang)
                            <div class="mt-2 col-md-12">
                                <img src="{{ asset('storage/' . $tentang->foto_tentang) }}" alt="Tentang Image" class="img-fluid" style="max-width: 300px;">
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="text-center mb-2">
                        <button type="submit" class="btn btn-primary">Update Data</button>
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
        selector: 'textarea#deskripsi',
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
