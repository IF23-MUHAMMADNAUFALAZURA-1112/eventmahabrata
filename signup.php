<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Mahabarata</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container-signup {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            width: 100%;
        }
        .btn-signup {
            background-color: #FFB74D; /* Warna jingga muda untuk tombol Daftar */
            color: white;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn-signup:hover {
            background-color: #FFA500; /* Warna jingga lebih gelap saat hover */
        }
        .login {
            text-align: center;
            margin-top: 20px;
           
        }
        .login a {
            color: #FFB74D; /* Warna jingga muda untuk tautan */
            text-decoration: none;
        }
        .login a:hover {
            text-decoration: underline; /* Menggarisbawahi tautan saat hover */
        }
        h1 {
            font-size: 1.8rem; /* Ukuran font diubah menjadi lebih kecil */
        }
    </style>
</head>
<body>

<div class="container-signup">
    <h1 class="mb-4">Daftar Mahabarata</h1>
    <p>Silahkan isi data kamu untuk mendaftar.</p>
    
    <form action="signup_process.php" method="POST">
        <div class="form-group mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn-signup btn">Daftar</button>
    </form>

    <div class="login mt-3">
        <p>Sudah punya akun? <a href="login.php">Masuk Sekarang</a></p>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
