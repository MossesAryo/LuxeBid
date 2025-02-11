<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeBid - Platform Lelang Premium</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url('/api/placeholder/1920/600');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .category-card {
            transition: transform 0.3s;
            cursor: pointer;
        }
        .category-card:hover {
            transform: translateY(-5px);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .live-badge {
            background-color: #dc3545;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
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
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cabang Kantor</a>
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
                    <h1 class="display-4 mb-4">Temukan Properti Impian Anda</h1>
                    <p class="lead mb-4">Platform lelang premium untuk properti dan aset berkualitas</p>
                    
                    <!-- Search Bar -->
                    <div class="bg-white p-4 rounded shadow">
                        <form class="row g-3">
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Cari properti...">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option selected>Semua Kategori</option>
                                    <option>Tanah</option>
                                    <option>Rumah</option>
                                    <option>Ruko</option>
                                    <option>Pabrik</option>
                                    <option>Mobil</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="fas fa-search me-2"></i>Cari
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Kategori Lelang</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card category-card h-100">
                        <img src="/api/placeholder/400/300" class="card-img-top" alt="Tanah">
                        <div class="card-body">
                            <h5 class="card-title">Tanah</h5>
                            <p class="card-text">Temukan tanah kavling dan lahan komersial berkualitas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card category-card h-100">
                        <img src="/api/placeholder/400/300" class="card-img-top" alt="Rumah">
                        <div class="card-body">
                            <h5 class="card-title">Rumah</h5>
                            <p class="card-text">Berbagai pilihan rumah hunian dan villa mewah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card category-card h-100">
                        <img src="/api/placeholder/400/300" class="card-img-top" alt="Ruko">
                        <div class="card-body">
                            <h5 class="card-title">Ruko</h5>
                            <p class="card-text">Ruko strategis untuk bisnis Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Live Auctions -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Lelang Live</h2>
                <span class="live-badge">
                    <i class="fas fa-circle me-1"></i> LIVE
                </span>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card">
                        <img src="/api/placeholder/300/200" class="card-img-top" alt="Property">
                        <div class="card-body">
                            <h5 class="card-title">Rumah Mewah BSD</h5>
                            <p class="card-text">
                                <small class="text-muted">Harga Awal:</small>
                                <br>
                                <strong class="text-primary">Rp 2.500.000.000</strong>
                            </p>
                            <button class="btn btn-outline-primary w-100">Ikut Lelang</button>
                        </div>
                    </div>
                </div>
                <!-- More live auction items... -->
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Filter Lot Lelang</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Filter</h5>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    <select class="form-select">
                                        <option selected>Semua Kategori</option>
                                        <option>Tanah</option>
                                        <option>Rumah</option>
                                        <option>Ruko</option>
                                        <option>Pabrik</option>
                                        <option>Mobil</option>
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
                                        <option>Surabaya</option>
                                        <option>Bandung</option>
                                        <option>Medan</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Terapkan Filter</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row g-4">
                        <!-- Filtered Items -->
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/api/placeholder/300/200" class="card-img-top" alt="Property">
                                <div class="card-body">
                                    <h5 class="card-title">Ruko 3 Lantai</h5>
                                    <p class="card-text">
                                        <small class="text-muted">Harga Awal:</small>
                                        <br>
                                        <strong class="text-primary">Rp 1.800.000.000</strong>
                                    </p>
                                    <button class="btn btn-outline-primary w-100">Detail</button>
                                </div>
                            </div>
                        </div>
                        <!-- More filtered items... -->
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