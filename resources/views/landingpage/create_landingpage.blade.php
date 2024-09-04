@extends('layout.sidebar')

@section('title', 'Data Landing Page')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center mb-4">Tambah Foto Landing Page</h1>
            <form method="POST" action="{{ route('landingpage.store') }}" enctype="multipart/form-data" id="myForm">
                @csrf
                <div class="row mb-3">
                    <label for="foto-slider" class="col-sm-2 col-form-label">Foto Slider</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="foto_slider" name="foto_slider" accept="image/*" required>
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
