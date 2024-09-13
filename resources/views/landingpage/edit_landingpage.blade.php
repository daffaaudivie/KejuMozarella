@extends('layout.sidebar')

@section('title', 'Edit Foto Slider')

@section('content')
<div class="container mt-0">
    <div class="row">
        <div class="col-md-12 mx-auto justify-content-center">
            <h1 class="text-center mb-4">Edit Foto Landing Page</h1>
            <form method="POST" action="{{ route('landingpage.update', $landingpage->id_slider) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')

                <!-- Foto slider -->
                <div class="form-group row">
                    <label for="foto_slider" class="col-form-label">Foto slider</label>
                    <input type="file" class="form-control" id="foto_slider" name="foto_slider" accept="image/*">
                    @if($landingpage->foto_slider)
                        <div class="mt-3">
                            <img src="{{ asset('storage/' . $landingpage->foto_slider) }}" alt="Slider Image" class="img-fluid" style="max-width: 700px;">
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <div class="text-center mb-2">
                        <button type="submit" class="btn btn-primary">Update Foto</button>
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
