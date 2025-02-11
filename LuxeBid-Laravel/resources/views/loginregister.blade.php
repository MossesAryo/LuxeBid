<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register - LuxeBid</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        .auth-wrapper {
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url('/api/placeholder/1920/1080');
            background-size: cover;
            background-position: center;
        }
        .auth-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 15px;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .auth-divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #6c757d;
            margin: 1rem 0;
        }
        .auth-divider::before,
        .auth-divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }
        .auth-divider span {
            padding: 0 1rem;
        }
        .social-login-btn {
            border: 1px solid #dee2e6;
            background: white;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            width: 100%;
            margin-bottom: 0.5rem;
            transition: all 0.3s;
        }
        .social-login-btn:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
        }
        .form-floating > label {
            padding-left: 1rem;
        }
    </style>
</head>
<body>
    <!-- Login Page -->
    <div class="auth-wrapper d-flex align-items-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="text-center mb-4">
                        <a href="#" class="navbar-brand text-white">
                            <i class="fas fa-gavel me-2"></i>LuxeBid
                        </a>
                    </div>
                    
                    <div class="card auth-card">
                        <div class="card-body p-4 p-lg-5">
                            <ul class="nav nav-pills mb-4" id="authTab" role="tablist">
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link active w-100" data-bs-toggle="pill" data-bs-target="#login">Login</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" data-bs-toggle="pill" data-bs-target="#register">Register</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="authTabContent">
                                <!-- Login Form -->
                                <div class="tab-pane fade show active" id="login">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="loginEmail" placeholder="name@example.com">
                                            <label for="loginEmail">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                                            <label for="loginPassword">Password</label>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">
                                                    Ingat saya
                                                </label>
                                            </div>
                                            <a href="#" class="text-primary text-decoration-none">Lupa password?</a>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                                        
                                        <div class="auth-divider">
                                            <span>atau login dengan</span>
                                        </div>
                                        
                                        <button type="button" class="social-login-btn mb-2">
                                            <img src="/api/placeholder/20/20" alt="Google" class="me-2">
                                            Google
                                        </button>
                                        <button type="button" class="social-login-btn">
                                            <img src="/api/placeholder/20/20" alt="Facebook" class="me-2">
                                            Facebook
                                        </button>
                                    </form>
                                </div>

                                <!-- Register Form -->
                                <div class="tab-pane fade" id="register">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="firstName" placeholder="Nama Depan">
                                                    <label for="firstName">Nama Depan</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="lastName" placeholder="Nama Belakang">
                                                    <label for="lastName">Nama Belakang</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="registerEmail" placeholder="name@example.com">
                                            <label for="registerEmail">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="phone" placeholder="Nomor Telepon">
                                            <label for="phone">Nomor Telepon</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="registerPassword" placeholder="Password">
                                            <label for="registerPassword">Password</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Password">
                                            <label for="confirmPassword">Konfirmasi Password</label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tipe Akun</label>
                                            <select class="form-select">
                                                <option>Pembeli</option>
                                                <option>Penjual</option>
                                                <option>UMKM</option>
                                            </select>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="termsCheck">
                                            <label class="form-check-label" for="termsCheck">
                                                Saya setuju dengan <a href="#" class="text-primary">Syarat & Ketentuan</a>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100 mb-3">Register</button>
                                        
                                        <div class="auth-divider">
                                            <span>atau register dengan</span>
                                        </div>
                                        
                                        <button type="button" class="social-login-btn mb-2">
                                            <img src="/api/placeholder/20/20" alt="Google" class="me-2">
                                            Google
                                        </button>
                                        <button type="button" class="social-login-btn">
                                            <img src="/api/placeholder/20/20" alt="Facebook" class="me-2">
                                            Facebook
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>