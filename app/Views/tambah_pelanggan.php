<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            margin: auto;
        }

        .btn-primary {
            background-color: #4e73df;
            border: none;
        }

        .btn-primary:hover {
            background-color: #375ab9;
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4e73df;
        }

        .form-label {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="form-container">
            <h1 class="form-title text-center mb-4">Tambah Pelanggan</h1>
            <form action="/kelolapelanggan/simpan" method="post">
                <div class="mb-3">
                    <label for="id_customer" class="form-label">Kode Pelanggan</label>
                    <input type="text" class="form-control" id="id_customer" name="id_customer" placeholder="Masukkan kode pelanggan" required>
                </div>
                <div class="mb-3">
                    <label for="nama_customer" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="nama_customer" name="nama_customer" placeholder="Masukkan nama pelanggan" required>
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nomor telepon" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
                <a href="/kelolapelanggan" class="btn btn-secondary w-100 mt-2">Batal</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
