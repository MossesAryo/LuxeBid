@extends('Front.Layout.template')

@section('main')
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
@endsection
