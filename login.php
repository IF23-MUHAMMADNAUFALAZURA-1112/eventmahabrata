<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mahabarata</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Import Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container-login {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            overflow: hidden;
        }
        .left-section {
            background-image: url('/FP/img/bromo.jpg'); /* Sesuaikan path gambar */
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: white;
            text-align: center;
        }
        .left-section h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .right-section {
            padding: 40px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-login {
            background-color: #FFB74D; /* Warna jingga soft untuk tombol Masuk */
            color: white; /* Warna teks tombol */
            width: 100%;
            border-radius: 5px;
        }
        .btn-login:hover {
            background-color: #FFA500; /* Warna jingga lebih gelap saat hover */
        }
        .forgot-password, .signup {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a, .signup a {
            color: #FFB74D; /* Warna jingga soft untuk tautan */
            text-decoration: none;
        }
        .forgot-password a:hover, .signup a:hover {
            text-decoration: underline; /* Menggarisbawahi tautan saat hover */
        }
        /* Terapkan font Poppins pada h2 */
        h2 {
            font-family: 'Poppins', cursive, sans-serif; /* Menggunakan Poppins */
        }
    </style>
</head>
<body>
    <div class="container-login row">
        <!-- Bagian kiri: Gambar dengan teks -->
        <div class="left-section col-md-6">
            <!-- Teks telah dihapus -->
        </div>

        <!-- Bagian kanan: Form login -->
        <div class="right-section col-md-6">
            <h2 class="mb-4">Masuk ke Mahabarata</h2>
            <form action="login_process.php" method="POST">
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-check my-3">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label for="remember" class="form-check-label">Ingat saya</label>
                </div>
                <button type="submit" class="btn-login btn">Masuk</button>
            </form>
            <div class="forgot-password">
                <a href="#">Lupa password?</a>
            </div>
            <div class="signup mt-3">
                <p>Belum punya akun? <a href="signup.php">Daftar Sekarang</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
