@extends('Front.Layout.template')
@section('main')
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
@endsection
