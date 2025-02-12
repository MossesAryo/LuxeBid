@extends('Front.Layout.template')

@section('main')
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
@endsection