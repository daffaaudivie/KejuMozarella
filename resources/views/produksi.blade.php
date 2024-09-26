@extends('layout.Pengguna.app')

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        animation: fadeInPage 1s ease-in-out;
    }
    .hero {
        position: relative;
        height: 300px;
        overflow: hidden;
        margin-top: 20px;
    }
    .hero img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .hero-text {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: white;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    .products-container {
        position: relative;
        max-width: 100%;
        overflow: hidden;
        padding: 20px 0;
    }
    .products {
        display: flex;
        overflow-x: scroll;
        scroll-behavior: smooth;
        -ms-overflow-style: none;
        scrollbar-width: none;
        padding: 0 20px;
    }
    .products::-webkit-scrollbar {
        display: none;
    }
    .product-card {
        flex: 0 0 auto;
        width: 300px;
        margin-right: 20px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .product-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    @keyframes fadeInZoom {
    0% {
        opacity: 0;
        transform: scale(0.8);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
    }

    .product-card img {
        animation: fadeInZoom 0.8s ease-in-out;
    }

    /* Animasi keseluruhan saat halaman di-refresh */
    @keyframes fadeInPage {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    .product-info {
        padding: 15px;
        color: black;
    }
    h2 {
        text-align: center;
        margin-top: 20px;
    }

    .scroll-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0,0,0,0.5);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        z-index: 10;
    }
    .scroll-btn.left {
        left: 0;
    }
    .scroll-btn.right {
        right: 0;
    }
    @media (max-width: 768px) {
        .product-card {
            width: 250px;
        }
    }
</style>

<div class="hero">
    <img src="{{ asset('img/broski.jpg') }}" class="img-fluid" alt="Cheese Image">
    <div class="hero-text">
        <h1>Yuk rasakan cita rasa keju khas Malang</h1>
        <p>Kamu juga wajib mampir ke pusat oleh-oleh kami</p>
    </div>
</div>

<h2>Produk Kami</h2>

<div class="products-container">
    <button class="scroll-btn left">&lt;</button>
    <button class="scroll-btn right">&gt;</button>
    <div class="products">
        @foreach($produksi as $item)
        <div class="product-card">
            <a href="{{ url('/dashboard/detailProduk', $item->id_produk) }}" class="text-decoration-none">
            <img src="{{ asset('storage/' . $item->foto_produk) }}" alt="{{ $item->nama_produk }}">
            <div class="product-info">
                <h5>{{ $item->nama_produk }}</h5>
            </div>
        </div>
        @endforeach
    
    
    </div>
    
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const productContainer = document.querySelector('.products');
        const leftBtn = document.querySelector('.scroll-btn.left');
        const rightBtn = document.querySelector('.scroll-btn.right');

        leftBtn.addEventListener('click', () => {
            productContainer.scrollBy({ left: -300, behavior: 'smooth' });
        });

        rightBtn.addEventListener('click', () => {
            productContainer.scrollBy({ left: 300, behavior: 'smooth' });
        });
    });
</script>