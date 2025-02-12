@extends('Front.Layout.template')
@section('main')
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
@endsection
