<?php
// Menyertakan page header
require "./includes/pageHeader.php";
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-primary mb-3">Login</h2>
                        <p class="text-muted">Silakan masukkan kredensial Anda</p>
                    </div>
                    <form action="login_process.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label fw-semibold">Username</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control border-start-0 ps-0" id="username" name="username" placeholder="Masukkan username" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control border-start-0 ps-0" id="password" name="password" placeholder="Masukkan password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2 rounded-3 shadow-sm">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Masuk
                        </button>
                    </form>
                    <div class="text-center mt-3">
                        <small class="text-muted">Belum punya akun? <a href="register.php" class="text-primary text-decoration-none">Daftar</a></small>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>
</div>
</div>
</div>

<?php
// Menyertakan footer
require "./includes/pageFooter.php";
?>