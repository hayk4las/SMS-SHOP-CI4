<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sms Shop || Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef;
            /* Warna abu-abu cerah */
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .input-group-text {
            background-color: #f8f9fa;
            border-right: 0;
        }

        .form-control {
            border-left: 0;
        }

        .input-group .form-control:focus {
            z-index: 2;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 350px;">
        <h3 class="text-center mb-4">Silahkan Login</h3>
        <form action="/login" method="post">
            <!-- Token CSRF -->
            <?= csrf_field(); ?>

            <!-- Input Username -->
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                </div>
            </div>
            <!-- Input Password -->
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
            </div>
            
            <!-- alert eror password or username -->
            <?php if (isset($error)): ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <!-- Tombol Login -->
            <button type="submit" class="btn btn-primary w-100">Login</button>

            <!-- Link ke halaman registrasi -->
<div class="text-center mt-3">
    <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>
</div>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>