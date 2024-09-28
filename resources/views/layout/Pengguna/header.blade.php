<nav class="navbar navbar-dark fixed-top">
    <div id="embase-header" class="container">
        <a class="navbar-brand" href="{{url('/dashboard')}}">
            <img src="{{ asset('img/logokejuu.png') }}" alt="Logo UK Mustarika Jaya" class="logo-brand">
            <span class="brand-text">UK MUSTARIKA JAYA</span>
        </a>
        <div id="nav-links">
            <a class="navbar-brand-menu" href="{{url('/dashboard')}}">Beranda</a>
            <a class="navbar-brand-menu" href="{{ url('/tentang') }}">Tentang Kami</a>
            <a class="navbar-brand-menu" href="{{ url('/produksi') }}">Produk</a>
            <a class="navbar-brand-menu" href="{{ url('/kreasi') }}">Kreasi Olahan</a>
            <a class="navbar-brand-menu" href="{{ url('/pembelian') }}">Pembelian</a>
        </div>
        
    </div>
</nav>

<script>
    document.getElementById('burger-menu').addEventListener('click', function() {
    document.getElementById('nav-links').classList.toggle('active');
});
</script>
