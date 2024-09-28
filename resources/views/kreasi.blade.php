@extends('layout.Pengguna.app')

<style>
    .hero-section {
        background-image: url('{{ asset('images/hero-mozarella.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }
    .hero-content {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 2rem;
        border-radius: 10px;
    }
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px 0;
    }
    .menu-item {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        padding: 20px;
        text-align: center;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    .menu-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .menu-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 5px;
        margin-bottom: 15px;
    }
    .menu-item h3 {
        color: #333;
        margin-bottom: 10px;
    }
    .menu-item p {
        color: #666;
        margin-bottom: 15px;
    }
    .price {
        font-weight: bold;
        color: #e67e22;
        font-size: 1.2em;
    }
</style>

<div class="hero-section" data-aos="fade-down">
    <div class="hero-content">
        <h1 data-aos="fade-up" data-aos-delay="200">Keju Mozarella Terbaik</h1>
        <p data-aos="fade-up" data-aos-delay="400">Nikmati berbagai olahan keju mozarella kami yang lezat dan berkualitas</p>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4" data-aos="fade-up">Menu Keju Mozarella Kami</h2>
    <div class="menu-grid">
        @foreach($items as $index => $item)
            <div class="menu-item" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <img src="{{ asset('storage/' . $item->foto_menu) }}" alt="{{ $item->nama_menu }}">
                <h3>{{ $item->nama_menu }}</h3>
                <p>{!! Str::limit( $item->deskripsi_menu, 100 ) !!}</p>
                <!-- <span class="price">Rp {{ number_format($item->harga, 0, ',', '.') }}</span> -->
                <button class="btn btn-primary mt-2" data-toggle="modal" data-target="#menuModal{{ $item->id_menu }}">
                    Lihat Detail
                </button>
            </div>

            <!-- Modal for each menu item -->
            <div class="modal fade" id="menuModal{{ $item->id_menu }}" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="menuModalLabel{{ $item->id_menu }}">{{ $item->nama_menu }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('storage/' . $item->foto_menu) }}" alt="{{ $item->nama_menu }}" class="img-fluid mb-3">
                            <h6>Deskripsi Menu:</h6>
                            <p>{!! $item->deskripsi_menu !!}</p>
                            <h6>Resep:</h6>
                            <p>{!! $item->resep !!}</p>
                            <h6>Langkah:</h6>
                            <p>{!! $item->langkah_pembuatan !!}</p>
                            <h6>Harga:</h6>
                            <p class="price">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
        });

        // Custom animation for menu items
        const menuItems = document.querySelectorAll('.menu-item');
        menuItems.forEach((item, index) => {
            item.style.animationDelay = `${index * 0.1}s`;
            item.classList.add('animate__animated', 'animate__fadeInUp');
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', function() {
            const heroSection = document.querySelector('.hero-section');
            let scrollPosition = window.pageYOffset;
            heroSection.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
        });
    });
</script>