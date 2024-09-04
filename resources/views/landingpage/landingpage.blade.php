@extends('layout.sidebar')

@section('title', 'Data Landing Page')

@section('content')
<style>
    .container{
        margin-left:100px;
    }
</style>

<div class="container mt-6 justify-content-center align-items-center">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 style="font-size: 30px;">Data Landing Page</h1>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12 text-right">
            <a class="btn btn-success" href="{{ route('landingpage.create') }}">Tambah Data +</a>
        </div>
    </div>

    <div class="table-responsive mt-4"> <!-- Tambahkan class 'table-responsive' untuk membuat tabel responsif -->
        <table class="table table-bordered text-center"> <!-- Menggunakan class 'text-center' dari Bootstrap -->
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Foto Slider</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tb_slider as $index => $baris)
                    <tr class="{{ $index % 2 == 0 ? 'table-success' : 'table-light' }}">
                        <td>{{ $baris->id_slider }}</td>
                        <td>
                            <!-- Menggunakan class 'img-fluid' untuk membuat gambar responsif -->
                            <img src="{{ asset('storage/' . $baris->foto_slider) }}" alt="Slider Image" class="img-fluid" style="max-width: 800px;"> <!-- Batasi lebar gambar dengan 'max-width' -->
                        </td>
                        <td>
                            <a href="{{ route('landingpage.edit', $baris->id_slider) }}" class="btn btn-warning text-white">Edit</a>
                            <form action="{{ route('landingpage.destroy', $baris->id_slider) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="hapusData({{ $baris->id_slider }})">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<script>
    function hapusData(id) {
        if (confirm("Apakah Anda yakin ingin menghapus data dengan ID " + id + "?")) {
            alert("Data dengan ID " + id + " berhasil dihapus.");
        }
    }
</script>
