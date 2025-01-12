<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang Keluar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h1 {
            color: #4a4e69;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
            color: #343a40;
        }

        .form-control {
            border-radius: 8px;
        }

        .form-control:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            font-weight: bold;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            border-radius: 8px;
            font-weight: bold;
            padding: 10px 20px;
            background-color: rgb(75, 75, 75);
            border-color: rgb(75, 75, 75);
        }

        .btn-secondary:hover {
            background-color: #333333;
        }

        .alert {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Barang Keluar</h1>
        <hr>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form action="/barangkeluar/update/<?= esc($barang_keluar['id_keluar']); ?>" method="post">
            <?= csrf_field(); ?> <!-- Token CSRF -->

            <div class="mb-3">
                <label for="imei_hp" class="form-label">IMEI HP</label>
                <input type="text" name="imei_hp" id="imei_hp" class="form-control" value="<?= esc($barang_keluar['imei_hp']); ?>" required readonly>
            </div>

            <div class="mb-3">
                <label for="id_customer" class="form-label">ID Customer</label>
                <input type="text" name="id_customer" id="id_customer" class="form-control" value="<?= esc($barang_keluar['id_customer']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
                <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="form-control" value="<?= esc($barang_keluar['tanggal_keluar']); ?>" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="/barangkeluar" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>
