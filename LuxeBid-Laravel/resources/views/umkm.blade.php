<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM - LuxeBid</title>
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
        .product-card {
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .badge-verified {
            background-color: #198754;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
        }
        .timer {
            color: #dc3545;
            font-weight: bold;
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
                        <a class="nav-link" href="#">Cabang Kantor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">UMKM</a>
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
                    <h1 class="display-4 mb-4">Lelang UMKM</h1>
                    <p class="lead">Dukung UMKM Indonesia melalui platform lelang terpercaya</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Filter Sidebar -->
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Filter Lot Lelang</h5>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    <select class="form-select">
                                        <option selected>Semua Kategori</option>
                                        <option>Makanan & Minuman</option>
                                        <option>Kerajinan Tangan</option>
                                        <option>Fashion</option>
                                        <option>Pertanian</option>
                                        <option>Perikanan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga Minimal</label>
                                    <input type="number" class="form-control" placeholder="Rp">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga Maksimal</label>
                                    <input type="number" class="form-control" placeholder="Rp">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Lokasi</label>
                                    <select class="form-select">
                                        <option selected>Pilih Lokasi</option>
                                        <option>Jakarta</option>
                                        <option>Bandung</option>
                                        <option>Surabaya</option>
                                        <option>Yogyakarta</option>
                                        <option>Medan</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Terapkan Filter</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="col-md-9">
                    <!-- Featured Section -->
                    <h4 class="mb-4">Rekomendasi UMKM</h4>
                    <div class="row g-4 mb-5">
                        <div class="col-md-4">
                            <div class="card product-card">
                                <img src="/api/placeholder/300/200" class="card-img-top" alt="Product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="card-title mb-0">Kopi Arabika Gayo</h5>
                                        <span class="badge-verified">
                                            <i class="fas fa-check-circle"></i> Verified
                                        </span>
                                    </div>
                                    <p class="card-text">
                                        <small class="text-muted">Kategori: Makanan & Minuman</small>
                                    </p>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt text-primary me-2"></i>Aceh
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">Harga Awal:</small><br>
                                        <strong class="text-primary">Rp 1.500.000</strong>
                                    </p>
                                    <p class="timer mb-3">
                                        <i class="fas fa-clock me-2"></i>23:45:12
                                    </p>
                                    <button class="btn btn-outline-primary w-100">Ikut Lelang</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card product-card">
                                <img src="/api/placeholder/300/200" class="card-img-top" alt="Product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="card-title mb-0">Batik Tulis Premium</h5>
                                        <span class="badge-verified">
                                            <i class="fas fa-check-circle"></i> Verified
                                        </span>
                                    </div>
                                    <p class="card-text">
                                        <small class="text-muted">Kategori: Fashion</small>
                                    </p>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt text-primary me-2"></i>Yogyakarta
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">Harga Awal:</small><br>
                                        <strong class="text-primary">Rp 2.800.000</strong>
                                    </p>
                                    <p class="timer mb-3">
                                        <i class="fas fa-clock me-2"></i>11:30:00
                                    </p>
                                    <button class="btn btn-outline-primary w-100">Ikut Lelang</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card product-card">
                                <img src="/api/placeholder/300/200" class="card-img-top" alt="Product">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="card-title mb-0">Kerajinan Rotan</h5>
                                        <span class="badge-verified">
                                            <i class="fas fa-check-circle"></i> Verified
                                        </span>
                                    </div>
                                    <p class="card-text">
                                        <small class="text-muted">Kategori: Kerajinan Tangan</small>
                                    </p>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt text-primary me-2"></i>Cirebon
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">Harga Awal:</small><br>
                                        <strong class="text-primary">Rp 3.500.000</strong>
                                    </p>
                                    <p class="timer mb-3">
                                        <i class="fas fa-clock me-2"></i>05:15:30
                                    </p>
                                    <button class="btn btn-outline-primary w-100">Ikut Lelang</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- All Products -->
                    <h4 class="mb-4">Semua Produk UMKM</h4>
                    <div class="row g-4">
                        <!-- Product cards will be dynamically populated here -->
                    </div>
                </div>
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