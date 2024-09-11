@extends('layout.Pengguna.app')

@section('content')
<div class="container-fluid container-tentang">
    <!-- Kisah Kami Section -->
    <div class="tentang row">
        <div class="col-md-6">
            <h2>Kisah Kami</h2>
            <p class="font-weight-bold">Latar Belakang KUB Mustarika Jaya Makmur</p>
            <p>
                Kami (KUB Mustarika Jaya Makmur) berkomitmen tinggi untuk memasarkan produk-produk bermutu dan berkualitas tinggi untuk masyarakat Indonesia. Saat ini kami telah memproduksi berbagai jenis produk keju yang disukai oleh berbagai kalangan. Salah satu produk berkualitas tinggi dalam portfolio kami yang banyak disukai semua orang adalah produk keju pada merek KUB Mustarika Jaya Makmur.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/broski.jpg') }}" class="img-fluid" alt="Cheese Image">
        </div>
    </div>

    <!-- Ciri Khas Keju Section -->
    <div class="my-5">
        <h3 class="text-center">Ciri Khas Keju</h3>
        <div class="ciri">
            <div class="">
                <h5>Rasa</h5>
                <p>Keju dapat memiliki rasa yang sangat kuat hingga lembut, dari keju berduri hingga kuat dan bersahaja. Keju kami memiliki ciri khas yang 
                    <br>tak terlupakan dengan rasa yang kaya dan tajam, menghasilkan kombinasi yang unik dengan metode alami.</p>
            </div>
            <div class="">
                <h5>Aroma</h5>
                <p>
                    Keju memiliki aroma kuat yang menggugah selera, khas dari proses fermentasi alami. Ketika dipotong, bau yang segar dan khas langsung tercium. 
                    <br>Kami memastikan kualitas aroma ini tetap sempurna.
                </p>
            </div>
            <div class="">
                <h5>Tekstur</h5>
                <p>
                    Tekstur keju bisa bermacam-macam, bisa lembut dan lembek atau sangat kering dan keras. Kami memproduksi keju yang cocok untuk semua jenis selera.
                </p>
            </div>
        </div>
    </div>

    <!-- Visi & Misi Section -->
    <div class="my-5">
        <h3 class="text-center">Visi</h3>
        <p class="visi text-center">
            Menjadi produsen keju terbaik dengan membawa produk dalam skala global dan memproduksi <br>
             keju berkualitas tinggi untuk kebutuhan berbagai kalangan masyarakat, mulai dari rumahan hingga industri besar.
        </p>

        <h3 class=" text-center">Misi</h3>
        <div class="misi ul-misi">
            <h6>Menghasilkan produk berkualitas tinggi dengan standar internasional.</h6>
                <p>Memproduksi keju mozzarella yang konsisten dengan standar tertinggi, menggunakan bahan-bahan terbaik, 
                    <br>dan proses pembuatan yang aman dan higienis.</p>
            <h6>Menjamin proses pembuatan yang higienis dengan menggunakan bahan-bahan yang terbaik.</h6>
                <p>Terus mengembangkan produk baru dan meningkatkan teknologi produksi untuk memenuhi 
                    <br>kebutuhan pasar yang terus berkembang dan beragam.</p>
            <h6>Menjaga keberlanjutan dalam proses produksi dengan fokus pada kesejahteraan komunitas lokal.</h6>
                <p>Memberikan pelayanan terbaik kepada pelanggan dengan memastikan bahwa setiap produk 
                    <br>memenuhi ekspektasi rasa, tekstur, dan kualitas</p>
        <div>
        
    </div>
</div>

<script>
    window.onload = function() {
        document.body.classList.add('fade-in');
    };
</script>

@endsection
