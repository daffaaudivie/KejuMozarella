@extends('layout.app')

@section('title', 'Dashboard')

<!-- Menambahkan gaya CSS -->
<style>
    .hero-section {
        position: relative;
        background-image: url('{{ asset('img/oke.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
        top: 0;
        left: 0;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 8px;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
        padding: 40px;
        background-color: rgba(0, 1, 1, 0.5);
        border-radius: 8px;
    }

    .hero-content h1 {
        font-size: 50px;
        font-weight: bold;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    }

    .hero-content p {
        font-size: 40px;
        margin-top: 20px;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.2;
    }

    .hero-content .btn {
        background-color: #f5842b;
        color: white;
        font-size: 25px;
        padding: 10px 20px;
        border-radius: 4px;
        margin-top: 20px;
        text-decoration: none;
    }

    .hero-content .btn:hover {
        background-color: #ffc107;
        color: black;
    }

    .company-info {
        margin-top: 50px;
    }

    .company {
        padding: 70px;
        width: 1600px;
        border-radius: 10px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-left: -250px;
        margin-right: -150px;
    }

    .company-text {
        font-size: 20px;
        line-height: 1.6;
        margin-bottom: 20px;
        max-width: 600px;
    }

    .company h2 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .company h3 {
        font-size: 27px;
        margin-bottom: 20px;
        color: orange;
    }

    .company-image {
        width: 100%;
        max-width: 900px;
        margin-left: 20px;
        border: 1px solid #4CAF50;
        border-radius: 8px;
        overflow: hidden;
    }

    .company-image img {
        width: 100%;
        height: 700px;
        display: block;
        border-radius: 10px;
    }

    .pemisah {
        background-color: #f1cc71;
        padding: 60px;
        text-align: center;
        border-radius: 8px;
    }

    .pemisah h5 {
        font-size: 30px;
        font-weight: bold;
        color: #a95527;
        margin: 0;
        text-transform: uppercase;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<!-- landing page -->
<div class="hero-section">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>KEJU MOZARELLA KHAS MALANG</h1>
        <p>Try our fresh and creamy mozzarella cheese, made locally in Malang. Perfect for every dish!</p>
        <a href="#" class="btn">Learn More</a>
    </div>
</div>

<!-- Tengah Halaman -->
<div class="pemisah">
    <h5>All Natural | Made in Wisconsin | Milk from Family Farms | Tradition Since 1919</h5>
</div>

<!-- Tentang Perusahaan -->
<div class="container company-info">
    <div class="company" id="kisah-kami">
        <!-- Kolom teks -->
        <div class="company-text">
            <h2>KISAH KAMI</h2>
            <h3>Latar Belakang Perusahaan</h3>
            <p>
                Keju Mozzarella Khas Malang is a locally owned company that specializes in producing high-quality, fresh mozzarella cheese. Located in the heart of Malang, our company is known for its unique blend of traditional cheese-making techniques and modern production methods.
            </p>
            <p>
                Founded in 2024, we have been committed to providing our customers with the best mozzarella cheese available, using only the finest ingredients sourced locally. Our cheese is made fresh daily and has a rich, creamy texture that melts perfectly, making it a favorite among chefs and home cooks alike.
            </p>
        </div>

        <!-- Kolom gambar -->
        <div class="company-image">
            <img src="{{ asset('img/kejugas.jpg') }}" alt="Company Image">
        </div>
    </div>
</div>

</html>
