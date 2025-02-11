<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabang Kantor - LuxeBid</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url('/api/placeholder/1920/400');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .office-card {
            transition: transform 0.3s;
            cursor: pointer;
        }
        .office-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .region-title {
            border-left: 4px solid #0d6efd;
            padding-left: 15px;
        }
    </style>
</head>
<body>
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
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Cabang Kantor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">UMKM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pusat Bantuan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="display-4 mb-4">Cabang Kantor LuxeBid</h1>
                    <p class="lead">Temukan kantor LuxeBid terdekat di kota Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Branch Offices Section -->
    <section class="py-5">
        <div class="container">
            <!-- Search -->
            <div class="row mb-5">
                <div class="col-md-6 mx-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari kantor cabang...">
                        <button class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pulau Jawa -->
            <h2 class="region-title mb-4">Pulau Jawa</h2>
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card office-card">
                        <div class="card-body">
                            <h5 class="card-title">Jakarta Pusat</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                Jl. Thamrin No. 1, Jakarta Pusat
                            </p>
                            <p class="card-text">
                                <i class="fas fa-phone text-primary me-2"></i>
                                021-555-0123
                            </p>
                            <p class="card-text">
                                <i class="fas fa-clock text-primary me-2"></i>
                                Senin - Jumat: 08:00 - 17:00
                            </p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat di Peta</a>
                        </div>
                    </div>
                </div>
                <!-- More offices in Java -->
            </div>

            <!-- Pulau Sumatera -->
            <h2 class="region-title mb-4">Pulau Sumatera</h2>
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card office-card">
                        <div class="card-body">
                            <h5 class="card-title">Medan</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                Jl. Diponegoro No. 10, Medan
                            </p>
                            <p class="card-text">
                                <i class="fas fa-phone text-primary me-2"></i>
                                061-555-0123
                            </p>
                            <p class="card-text">
                                <i class="fas fa-clock text-primary me-2"></i>
                                Senin - Jumat: 08:00 - 17:00
                            </p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat di Peta</a>
                        </div>
                    </div>
                </div>
                <!-- More offices in Sumatra -->
            </div>

            <!-- Pulau Kalimantan -->
            <h2 class="region-title mb-4">Pulau Kalimantan</h2>
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card office-card">
                        <div class="card-body">
                            <h5 class="card-title">Balikpapan</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                Jl. Sudirman No. 15, Balikpapan
                            </p>
                            <p class="card-text">
                                <i class="fas fa-phone text-primary me-2"></i>
                                0542-555-0123
                            </p>
                            <p class="card-text">
                                <i class="fas fa-clock text-primary me-2"></i>
                                Senin - Jumat: 08:00 - 17:00
                            </p>
                            <a href="#" class="btn btn-outline-primary w-100">Lihat di Peta</a>
                        </div>
                    </div>
                </div>
                <!-- More offices in Kalimantan -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>LuxeBid</h5>
                    <p>Platform lelang premium untuk properti dan aset berkualitas di Indonesia.</p>
                </div>
                <div class="col-md-4">
                    <h5>Link Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Tentang Kami</a></li>
                        <li><a href="#" class="text-light">Cara Lelang</a></li>
                        <li><a href="#" class="text-light">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-light">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Hubungi Kami</h5>
                    <p>
                        <i class="fas fa-envelope me-2"></i>info@luxebid.id<br>
                        <i class="fas fa-phone me-2"></i>021-1234567<br>
                        <i class="fas fa-map-marker-alt me-2"></i>Jakarta, Indonesia
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>