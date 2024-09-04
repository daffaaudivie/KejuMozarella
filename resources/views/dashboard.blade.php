@include('layout.app')

@section('title', 'Landing Page')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

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
                      <button class="button-tentang">Lihat selengkapnya </button>             
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
            <div class="col-card" >
                <div class="card">
                    <img src="{{ asset('img/menu/menu1.jpg') }}" class="card-img-top" alt="Bromo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bola Keju</h5>
                    </div>
                </div>
            </div>
            <div class="col-card">
                <div class="card">
                    <img src="{{ asset('img/menu/menu2.jpg') }}" class="card-img-top" alt="Kawah Ijen">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pizza</h5>
                    </div>
                </div>
            </div>
            <div class="col-card">
                <div class="card">
                    <img src="{{ asset('img/menu/menu3.jpg') }}" class="card-img-top" alt="Tumpak Sewu">
                    <div class="card-body text-center">
                        <h5 class="card-title">Crispy Cheese</h5>
                    </div>
                </div>
            </div>
            <div class="col-card">
                <div class="card">
                    <img src="{{ asset('img/menu/menu4.jpg') }}" class="card-img-top" alt="Tumpak Sewu">
                    <div class="card-body text-center">
                        <h5 class="card-title">Slices</h5>
                    </div>
                </div>
            </div>
            <div class="col-card" >
                <div class="card">
                    <img src="{{ asset('img/menu/menu5.jpg') }}" class="card-img-top" alt="Bromo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Donat</h5>
                    </div>
                </div>
            </div>
            <!-- Kawah Ijen -->
            <div class="col-card">
                <div class="card">
                    <img src="{{ asset('img/menu/menu6.jpg') }}" class="card-img-top" alt="Kawah Ijen">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mac n Cheese</h5>
                    </div>
                </div>
            </div>
            <div class="col-card">
                <div class="card">
                    <img src="{{ asset('img/menu/menu7.jpg') }}" class="card-img-top" alt="Tumpak Sewu">
                    <div class="card-body text-center">
                        <h5 class="card-title">Risol Keju</h5>
                    </div>
                </div>
            </div>
            <div class="col-card">
                <div class="card">
                    <img src="{{ asset('img/menu/menu8.jpg') }}" class="card-img-top" alt="Tumpak Sewu">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cheeseroll</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="pemisah">
    <h5>All Natural | Made in Singosari | Milk from Alam Hijau Lestari | Tradition Since 1919</h5>
</div>

   <!-- Form Section -->
   <section class="contact-section py-5">
    <div class="container">
        <div class="row">
            <!-- Kolom Form -->
            <div class="col-lg-6" >
                <form class="contact-form">
                    <h3>Hubungi Kami</h3>
                    <div class="form-group">
                        <!-- <p>Nama Anda</p> -->
                        <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                    </div>  
                    <div class="form-group">
                        <!-- <p>Nomor Telepon</p> -->
                        <input type="tel" class="form-control" placeholder="Nomor Telepon" required>
                    </div>
                    <div class="form-group">
                        <!-- <p>Nama Anda</p> -->
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <!-- <p>Nama Anda</p> -->
                        <textarea class="form-control" rows="4" placeholder="Jelaskan tujuan anda" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Kirim</button>
                </form>
            </div>

            <!-- Kolom Informasi -->
            <div class="col-lg-5  col-md-6">
                <h3>Kerja Sama untuk Masa Depan</h3>
                <p>Tertarik bekerja sama dengan Mustarika Jaya? Isi form dan mari mulai diskusi mewujudkan tujuanmu.</p>
                <div class="contact-info align-items-end text-end">
                    <div class="info-item">
                        <i class="fas fa-envelope"></i> info@kejumalang.com
                    </div>
                    <div class="info-item align-items-end text-end">
                        <i class="fab fa-whatsapp"></i> +62 812 3456 7890
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <h2 class="text-center mt-15">INFORMASI PEMBELIAN</h2>
        <p class="text-kita">Anda dapat membeli produk kami dengan datang ke swalayan berikut</p>
            
        <!-- Footer -->
            <footer class="footer text-white py-4">
            <div class="container-footer">
                <div class="row-footer">
                    <!-- Kolom pertama: Deskripsi Perusahaan -->
                    <div class="col-sm-4">
                        <h4>Kontak Kami</h4>
                        <p>Punya pertanyaan, permintaan, atau hanya ingin menunjukkan dukungan Anda untuk <br> produk Mustarika Jaya? 
                        Kami akan senang mendengarnya dari Anda! Hubungi tim kami jika ada pertanyaan, <br> seputar peluang kemitraan, atau sekedar ingin menyapa kami.<br>
                        </p>
                    </div>
                    <!-- Kolom kedua: Menu Navigasi -->
                    <div class="col-sm-4">
                        <h5>Menu</h5>
                        <ul class="list-unstyled">
                            <li><a href="#kisah-kami" class="text-white">Kisah Kami</a></li>
                            <li><a href="#produk" class="text-white">Produk</a></li>
                            <li><a href="#kreasi-menu" class="text-white">Kreasi Menu</a></li>
                            <li><a href="#kontak" class="text-white">Kontak Kami</a></li>
                        </ul>
                    </div>
                    <!-- Kolom ketiga: Info Kontak -->
                    <div class="col-sm-4">
                        <h5>Alamat Kami</h5>
                        <p> UK Mustarika Jaya <br>
                            Perum Alam Hijau Lestari No. L-12, <br> Jl. Raya Cendana, Singosari, Malang<br>
                            info@kejumalang.com <br> +62 812 3456 7890
                        </p>
                    </div>
                </div>
                
                <!-- Baris Bawah: Sosial Media -->
                <div class="row-sosmed">
                    <div class="col text-center text-white">
                    <h5>Visit Our Social Media</h5>
                        <a href="#" class="text-white mx-2"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="text-white mx-2"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://wa.me/6285155442305" class="text-white mx-2"><i class="fab fa-whatsapp fa-2x"></i></a>
                        <a href="#" class="text-white mx-2"><i class="fab fa-youtube fa-2x"></i></a>
                    </div>
                </div>
                <!-- Baris Copyright -->
                <div class="row mt-1">
                    <div class="col text-center text-white">
                        <p class="mb-0">&copy; UK Mustarika Jaya. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

    
</html>
