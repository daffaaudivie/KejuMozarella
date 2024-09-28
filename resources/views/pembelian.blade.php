@extends('layout.Pengguna.app')
@section('content')

<title>Find Us - EMINA CHEESE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .main-content {
        position: relative;
        height: 100vh;
        background-image: url('../../img/broski.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
     }


        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.7);
        }
        .content {
            position: relative;
            z-index: 1;
            padding: 3rem;
            max-width: 800px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

    b {
        color: #8B0000; 
        font-size: 3rem;
        margin-right: 200px;
        margin-bottom: 0rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); 
        font-weight: bold; 
    }

    p {
        color: #8B0000; 
        margin-bottom: 4rem;
        margin-right: 200px;
        font-size: 1.3rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); 
        
    }

    </style>
</head>
<body>
    <div class="main-content">
        <div class="overlay"></div>
        <div class="content">
            <b>Find us</b>
            <p>Temukan KANG DJOE disini!</p>
        </div>
    </div>
</body>

<!-- Contact Section -->
<section class="pembelian-section">
    <h4 class="text-center mt-15">INFORMASI PEMBELIAN</h4>
    <h6 class="text-beli">"Anda dapat membeli produk kami dengan datang langsung ke swalayan berikut: 
        Superindo, Alfamart, Indomaret, Giant, Hypermart, LotteMart, dan Carrefour. Pastikan untuk mengecek ketersediaan produk kami di swalayan terdekat Anda. Kami terus bekerja sama dengan berbagai swalayan besar di seluruh Indonesia untuk memastikan produk-produk kami dapat dengan mudah Anda temukan."
    </h6>
    <h4 class="text-store">Store</h4>
    <div class="logo-container">
        <div class="logo-box">
        <img src="{{ asset('img/store/indomaret.png') }}" alt="Logo indomaret">
        </div>
        <div class="logo-box">
        <img src="{{ asset('img/store/alfamart.svg') }}" alt="Logo alfamart">
        </div>
        <div class="logo-box">
             <img src="{{ asset('img/store/superindo.png') }}" alt="Logo Superindo">
        </div>
        <div class="logo-box">
        <img src="{{ asset('img/store/Lottemart.jpg') }}" alt="Logo lottemart">
        </div>
        <div class="logo-box">
        <img src="{{ asset('img/store/carrefour.webp') }}" alt="Logo carrefour">
        </div>
        <!-- Tambahkan lebih banyak logo jika diperlukan -->
    </div>
    <h4 class="text-store">e-Commerce</h4>
    <div class="logo-container">
        <div class="logo-box">
        <img src="{{ asset('img/online/tokopedia.jpg') }}" alt="Logo tokopedia">
        </div>
        <div class="logo-box">
        <img src="{{ asset('img/online/shopee.jpg') }}" alt="Logo shopee">
       </div>
        <div class="logo-box">
             <img src="{{ asset('img/online/lazada.jpg') }}" alt="Logo lazada">
        </div>
        <div class="logo-box">
        <img src="{{ asset('img/online/bukalapak.png') }}" alt="Logo bukalapak">
        </div>
        <div class="logo-box">
        <img src="{{ asset('img/online/blibli.jpg') }}" alt="Logo blibli">
        </div>
        <!-- Tambahkan lebih banyak logo jika diperlukan -->
    </div>
</section>
