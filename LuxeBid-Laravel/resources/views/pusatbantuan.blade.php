<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan - LuxeBid</title>
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
        .faq-card {
            transition: transform 0.3s;
            cursor: pointer;
        }
        .faq-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .contact-info-card {
            border-left: 4px solid #0d6efd;
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
                        <a class="nav-link" href="#">UMKM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Pusat Bantuan</a>
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
                    <h1 class="display-4 mb-4">Pusat Bantuan</h1>
                    <p class="lead">Kami siap membantu menjawab pertanyaan Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-4">Kirim Pertanyaan</h4>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    <select class="form-select" required>
                                        <option value="">Pilih Kategori</option>
                                        <option>Cara Lelang</option>
                                        <option>Pembayaran</option>
                                        <option>Akun</option>
                                        <option>Teknikal</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Subjek</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pertanyaan</label>
                                    <textarea class="form-control" rows="5" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Lampiran (opsional)</label>
                                    <input type="file" class="form-control">
                                    <small class="text-muted">Format yang didukung: JPG, PNG, PDF (Max. 5MB)</small>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info Sidebar -->
                <div class="col-md-4">
                    <div class="card contact-info-card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Kontak Langsung</h5>
                            <p class="card-text">
                                <i class="fas fa-phone text-primary me-2"></i>
                                021-1234567
                            </p>
                            <p class="card-text">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                support@luxebid.id
                            </p>
                            <p class="card-text">
                                <i class="fas fa-clock text-primary me-2"></i>
                                Senin - Jumat: 09:00 - 17:00
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title mb-3">FAQ</h5>
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                            Bagaimana cara mengikuti lelang?
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Untuk mengikuti lelang, Anda perlu mendaftar akun terlebih dahulu dan melakukan verifikasi. Setelah itu, Anda dapat memilih lot lelang yang diminati dan mengajukan penawaran.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                            Berapa lama proses verifikasi akun?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Proses verifikasi akun biasanya memakan waktu 1-2 hari kerja setelah semua dokumen yang diperlukan dikirimkan.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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