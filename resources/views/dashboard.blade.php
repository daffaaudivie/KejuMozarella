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
        opacity: 0.7    ;
    }

    /* .overlay {
        position: static;
        margin-left: 500px;
        padding: 350px 500px;
        width: 200px;
        border-radius: 4px;
        background-color: rgba(0, 1, 1, 0.5);
    } */

    .overlay {
        margin: auto;
        width: 60%;
        padding: 400px;
        border-radius: 5px;
        background-color: rgba(0, 1, 1, 0.5);
    }
    
    .hero-content {
        position: absolute; 
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    }

    .hero-content h1 {
        font-size: 50px;
        font-weight: bold;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
    }

    .hero-content p {
        font-size: 40px;
        margin-top: 20px;
    }

    .hero-content .btn {
        background-color: #1A4D2E;
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
        margin-top: 100px;
    }

    .company {
        margin-left: -300px;
        margin-right: -100px;
        padding: 30px;
        border: 1px solid #4CAF50;
    }

    .company h2 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .company img {
        padding: 30px;
        border: 1px solid #4CAF50;
        width: 100%;
        max-width: 800px;
        height: auto;
        border-radius: 8px;
    }

    .company-text {
        font-size: 20px;
        line-height: 1.6;
        margin-bottom: 20px;
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

<!-- Tentang Perusahaan -->
<div class="container company-info">
    <div class="row">
        <!-- Kolom teks -->
        <div class="col-md-6">
            <div class="company">
                <h2>About Our Company</h2>
                <p class="company-text">
                    Keju Mozzarella Khas Malang is a locally owned company that specializes in producing high-quality, fresh mozzarella cheese. Located in the heart of Malang, our company is known for its unique blend of traditional cheese-making techniques and modern production methods.
                </p>
                <p class="company-text">
                    Founded in 2024, we have been committed to providing our customers with the best mozzarella cheese available, using only the finest ingredients sourced locally. Our cheese is made fresh daily and has a rich, creamy texture that melts perfectly, making it a favorite among chefs and home cooks alike. Founded in 2024, we have been committed to providing our customers with the best mozzarella cheese available, using only the finest ingredients sourced locally. Our cheese is made fresh daily and has a rich, creamy texture that melts perfectly, making it a favorite among chefs and home cooks alike. Founded in 2024, we have been committed to providing our customers with the best mozzarella cheese available, using only the finest ingredients sourced locally. Our cheese is made fresh daily and has a rich, creamy texture that melts perfectly, making it a favorite among chefs and home cooks alike. Founded in 2024, we have been committed to providing our customers with the best mozzarella cheese available, using only the finest ingredients sourced locally. Our cheese is made fresh daily and has a rich, creamy texture that melts perfectly, making it a favorite among chefs and home cooks alike.
                </p>
            </div>
        </div>

        <!-- Kolom gambar -->
        <div class="col-md-6">
            <div class="company-image">
                <img src="{{ asset('img/keju.jpg') }}" alt="Company Image">
            </div>
        </div>
    </div>
</div>

</html>
