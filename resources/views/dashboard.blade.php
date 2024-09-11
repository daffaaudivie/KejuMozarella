@extends('layout.Pengguna.app')

@section('title', 'Landing Page')


<div class="hero-section" style="background-image: url('{{ asset('storage/' . $tb_slider->foto_slider) }}');">
    <div class="overlay"></div>
    <div class="hero-content">
        <h3>KEJU MOZARELLA KHAS MALANG</h1>
        <p>Try our fresh and creamy mozzarella cheese, made locally in Malang. Perfect for every dish!</p>
        <a href="#" class="btn">Learn More</a>
    </div>
</div>

<!-- Tengah Halaman -->
<div class="pemisah" id="kisah-kami">
    <h5>All Natural | Made in Singosari | Milk from Alam Hijau Lestari | Tradition Since 1919</h5>
</div>

<!-- Tentang Perusahaan -->
<!-- <div class="container company-info">
    <div class="company" > -->
        <!-- Kolom teks -->
        <!-- <div class="company-text">
            <h2>KISAH KAMI</h2>
            <h3>Latar Belakang Perusahaan</h3>
            <p>
                Keju Mozzarella Khas Malang is a locally owned company that specializes in producing high-quality, fresh mozzarella cheese. Located in the heart of Malang, our company is known for its unique blend of traditional cheese-making techniques and modern production methods.
            </p>
            <p>
                Founded in 2024, we have been committed to providing our customers with the best mozzarella cheese available, using only the finest ingredients sourced locally. Our cheese is made fresh daily and has a rich, creamy texture that melts perfectly, making it a favorite among chefs and home cooks alike.
            </p>
        </div> -->

        <!-- Kolom gambar -->
        <!-- <div class="company-image">
            <img src="{{ asset('img/kejugas.jpg') }}" alt="Company Image">
        </div>
    </div>
</div> -->

<section id="about">
        <div class="main-container split-layout">
            <div class="left-panel">
              <div class="left-content fade-in">
                  <h1>KISAH KAMI</h1>
                  <h4>Latar Belakang Baros dan Keju Gouda</h4>
                  <h5>Kisah pembuatan keju kami dimulai dari tahun 1998. Ketika Bukit Baros Cempaka (BBC) Beroperasi sebagai pabrik keju di Sukabumi, 
                    yang didirikan oleh pak Rachmantio dan bu Leila. Usaha ini dimulai pada masa-masa sulit yang ditandai dengan krisis moneter di Indonesia, yang mengakibatkan anjloknya
                    harga susu. Menghadapi kesulitan ini, pak Rachmantio menyalurkan perhatiannya pada kesejahteraan para peternak sapi perah di daerah Sukabumi </h5>
                    <img src="{{ asset('img/broski.jpg') }}" alt="Descriptive text for left side image" class="left-image">
                </div>
              </div>
              <div class="right-panel">
                <div class="right-content fade-in">
                  <img src="{{ asset('img/keju.jpg') }}" alt="" class="right-image">
                  <h5>Terlebih lagi, pada masa itu, keju belum begitu populer dikalangan masayrakat Indonesia. Namun, pak Rachmantio menyadari potensi besar dalam kualitas produk susu lokal dan sangat yakinakan daya 
                      saingnya. Keyakinan ini mulai mendorongnya untuk memulaai produksi keju Gouda, jenis keju yang terkenal dengan cita rasanya yang khas
                    </h5>  
                    <a href="{{ url('/tentang') }}" class="btn-tentang"> lihat selengkapnya</a>             
                </div>
              </div>
            </div>       
            
            <!-- <section class="bagian-pembuat-keju">
              <p>Di Baros, para pembuat keju kami adalah nyawa dari warisan pembuatan keju kami. Dengan pengalaman selama lebih dari dua dekade di tengah-tengah komunitas kami, mereka memberikan keahlian dan semangat yang tak tertandingi dalam pekerjaan mereka. Yang membedakan para pembuat keju kami adalah komitmen mereka yang teguh untuk mengadaptasi hasil karya yang sesuai dengan selera konsumen Indonesia. Mereka bangga memadukan tradisi dengan inovasi untuk menciptakan keju yang sesuai dengan cita rasa khas komunitas kami.</p>
              
              <div class="konten">
                <div class="gambar fade-in">
                  <img src="{{ asset('img/broski.jpg')}}" alt="Pembuat Keju" />
                </div>
                <div class="teks fade-in">
                  <p>Cheesemaker kami lahir dari kecintaan sang founder terhadap keju yang diwujudkan dengan membawa ahli keju dari Belanda untuk petukaran ilmu ke warga lokal dan Pak Herman adalah salah satu diantaranya yang berhasil. Dari proses itulah awal terciptanya keju ikonik khas Baros. Selama lebih dari 25 tahun, pak Herman tidak hanya konsisten menjaga kualitas tapi dia berkomitmen mewariskan citarasa resep sehingga keju Baros memiliki kualitas dan cita rasa khas yang terjaga selama puluhan tahun.</p>
                </div>
              </div>
            </section> -->
        </section>

<!-- Tengah Halaman -->
<div class="pisah">
    <h5>All Natural | Made in Singosari | Milk from Alam Hijau Lestari | Tradition Since 1919</h5>
</div>

<!-- Kreasi Menu -->
    <div class="container-menu mt-15">
        <h2 class="text-center mt-15">KREASI MENU</h2>
        <p class="text-kita">Berikut adalah kreasi menu yang bisa anda buat dengan menggunakan produk keju kami.</p>
        <div class="row-menu">
            @foreach($menus as $menu)
            <div class="col-card">
                <a href="{{ url('/dashboard/detailMenu/' . $menu->id_menu) }}" class="text-decoration-none text-dark">
                    <div class="card">
                        <img src="{{ asset('storage/' . $menu->foto_menu) }}" class="card-img-top" alt="{{ $menu->nama_menu }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $menu->nama_menu }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        </div>
    </div>

    <br><br>
    <div class="pemisah">
    <h5>All Natural | Made in Singosari | Milk from Alam Hijau Lestari | Tradition Since 1919</h5>
</div>

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

  <!-- Contact Section -->
  <section id="contact-section" class="contact-section">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Form Column -->
            <div class="col-lg-8">
                <h3>Yuk Hubungi Kami</h3>
                <form class="contact-form" action="{{ route('pesan.store') }}" method="POST">
                @csrf
    <!-- <div class="form-group">
        <select class="form-control" name="kategori_pesan" required>
            <option disabled selected>Pilih Kategori</option>
            <option value="Distributor">Ingin Menjadi Distributor</option>
            <option value="Reseller">Ingin Menjadi Reseller</option>
            <option value="Pembeli">Ingin Membeli Produk</option>
            <option value="Lainnya">Lainnya</option>
        </select>
    </div> -->
    <div class="form-group col-md-12">
            <input type="text" class="form-control" name="kategori_pesan" placeholder="Subjek" required>
        </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="nama" placeholder="Nama" required>
        </div>
        <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="tel" class="form-control" name="nomor" placeholder="No Handphone" required>
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-8">
            <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
        </div>
        <div class="form-group col-md-4">
            <div class="contact-info-box">
                <p><i class="fas fa-envelope"></i> harsyad.Tech@harsyad.co.id</p>
                <p><i class="fas fa-phone"></i> +6281233445566 (sit Amet)</p>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-dark col-md-2">Kirim</button>
    <script> 
        window.onload = function() {
            document.body.classList.add('fade-in');
        };

        </script>
                </form>
            </div>
        </div>
    </div>
</section>


