<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sms Shop || Input Barang Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eef2f7;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #4a4e69;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            font-weight: 600;
            color: #333333;
        }

        .form-control,
        .form-select {
            border-radius: 10px;
            font-size: 14px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }

        .btn-secondary {
            background-color: rgb(75, 75, 75);
            border-color: rgb(75, 75, 75);
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-secondary:hover {
            background-color: #333333;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h3>Input Barang Masuk</h3>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('input_barang/save') ?>" method="post">
            <?= csrf_field() ?>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="faktur" class="form-label">No. Faktur (ID Masuk)</label>
                    <input type="text" class="form-control" id="faktur" name="faktur" placeholder="Masukkan No. Faktur">
                </div>
                <div class="col-md-6">
                    <label for="tanggalFaktur" class="form-label">Tanggal Faktur</label>
                    <input type="date" class="form-control" id="tanggalFaktur" name="tanggalFaktur">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="imei" class="form-label">IMEI</label>
                    <input type="text" class="form-control" id="imei" name="imei" placeholder="Masukkan IMEI">
                </div>
                <div class="col-md-6">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan Merk">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="tipe" class="form-label">Tipe</label>
                    <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Masukkan Tipe">
                </div>
                <div class="col-md-6">
                    <label for="memori" class="form-label">Memori</label>
                    <input type="text" class="form-control" id="memori" name="memori" placeholder="Masukkan Memori">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="warna" class="form-label">Warna</label>
                    <input type="text" class="form-control" id="warna" name="warna" placeholder="Masukkan Warna">
                </div>
                <div class="col-md-6">
                    <label for="supplier" class="form-label">Pilih Supplier</label>
                    <select class="form-select" id="supplier" name="supplier">
                        <option selected>Pilih...</option>
                        <?php foreach ($suppliers as $supplier): ?>
                            <option value="<?= $supplier['id_supplier'] ?>"><?= $supplier['nama_supplier'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga">
            </div>

            <div class="d-flex justify-content-between">
                <a href="/barangmasuk" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
