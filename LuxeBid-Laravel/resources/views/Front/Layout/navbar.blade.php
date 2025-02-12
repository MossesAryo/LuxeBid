<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand text-primary" href="#">
            <i class="fas fa-gavel me-2"></i>LuxeBid
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/cabang') }}">Cabang Kantor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/umkm') }}">UMKM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/help') }}">Pusat Bantuan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>