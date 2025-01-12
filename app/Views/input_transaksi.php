<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMS Shop || Input Transaksi</title>

    <!-- Custom fonts and styles -->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home" aria-label="Dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SMS SHOP</div>
            </a>

            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Interface</div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Detail Barang</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Informasi Detail:</h6>
                        <a class="collapse-item" href="/stokbarang">Stok Barang</a>
                        <a class="collapse-item" href="/barangmasuk">Barang Masuk</a>
                        <a class="collapse-item" href="/barangkeluar">Barang Keluar</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <main id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <a class="navbar-brand" href="#" style="font-size: 24px; font-weight: bold;">Input Transaksi</a>
                </nav>

                <div class="container-fluid">
                    <!-- Button Kembali -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="/barangkeluar" class="btn btn-warning btn-sm font-weight-bold">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>

                    <!-- Form Input Transaksi -->
                    <section class="card mb-4">
                        <div class="card-header">
                            <h5 class="font-weight-bold">Form Input Transaksi</h5>
                        </div>
                        <div class="card-body">
                            <form action="/input-transaksi/simpan" method="post">
                                <?= csrf_field(); ?>
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="id_keluar" class="form-label">Inputkan Faktur</label>
                                        <input type="text" name="id_keluar" class="form-control" id="id_keluar" placeholder="Masukkan Faktur" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="imei_hp" class="form-label">IMEI Handphone</label>
                                        <input type="text" name="imei_hp" class="form-control" id="imei_hp" placeholder="Masukkan IMEI" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="id_customer" class="form-label">Kode Pelanggan</label>
                                        <input type="text" name="id_customer" class="form-control" id="id_customer" placeholder="Masukkan Kode Pelanggan" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="tanggal_keluar" class="form-label">Tanggal Transaksi</label>
                                        <input type="date" name="tanggal_keluar" class="form-control" id="tanggal_keluar" required>
                                    </div>
                                    <div class="col-md-3 d-flex align-items-end">
                                        <button type="submit" class="btn btn-success btn-sm form-control mt-3 font-weight-bold">
                                            Tambah Transaksi
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>

                    <!-- Tabel Data Transaksi -->
                    <section class="card">
                        <div class="card-header">
                            <h5 class="font-weight-bold">Tabel Data Transaksi</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>IMEI</th>
                                            <th>Merk</th>
                                            <th>Tipe</th>
                                            <th>Memori</th>
                                            <th>Warna</th>
                                            <th>Harga</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Tanggal Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($transaksi)): ?>
                                            <tr>
                                                <td colspan="9" class="text-center">Tidak ada data</td>
                                            </tr>
                                        <?php else: ?>
                                            <?php foreach ($transaksi as $key => $row): ?>
                                                <tr>
                                                    <td><?= $key + 1; ?></td>
                                                    <td><?= $row['imei_hp']; ?></td>
                                                    <td><?= $row['merk_hp']; ?></td>
                                                    <td><?= $row['tipe_hp']; ?></td>
                                                    <td><?= $row['memory_hp']; ?></td>
                                                    <td><?= $row['warna_hp']; ?></td>
                                                    <td>Rp <?= number_format($row['harga_hp'], 0, ',', '.'); ?></td>
                                                    <td><?= $row['nama_customer']; ?></td>
                                                    <td><?= $row['tanggal_keluar']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </main>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Haykal Aditya Saputra || 23.240.0023</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Scripts -->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>
</body>

</html>
