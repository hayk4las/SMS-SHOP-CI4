<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sms Shop || Barang Keluar</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        /* Styling untuk pagination */
        .pagination {
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        .pagination a,
        .pagination span {
            color: #4a4a4a;
            padding: 10px 20px;
            margin: 0 8px;
            border: 1px solid #dcdcdc;
            border-radius: 50px;
            text-decoration: none;
            background-color: #fff;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .pagination a:hover,
        .pagination .active {
            background: linear-gradient(to right, #007bff, #00c6ff);
            color: white;
            border-color: #00c6ff;
            box-shadow: 0 4px 15px rgba(0, 200, 255, 0.4);
            /* Efek bayangan lebih menonjol */
            transform: scale(1.1);
            /* Efek perbesaran tombol */
        }

        .pagination .disabled {
            color: #aaa;
            background-color: #f8f9fa;
            border-color: #ddd;
            pointer-events: none;
        }

        .pagination .prev,
        .pagination .next {
            background-color: #00c6ff;
            color: white;
            border-radius: 50px;
            padding: 8px 16px;
            font-weight: 700;
            border: none;
        }

        .pagination .prev:hover,
        .pagination .next:hover {
            background-color: #007bff;
            box-shadow: 0 4px 15px rgba(0, 0, 255, 0.3);
        }

        .pagination .first,
        .pagination .last {
            background-color: #6c757d;
            color: white;
            border-radius: 50px;
        }

        .pagination .first:hover,
        .pagination .last:hover {
            background-color: #007bff;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SMS SHOP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Interface</div>

            <!-- Nav Item - Pages Collapse Menu -->
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

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <a class="navbar-brand" href="#" style="font-size: 24px; font-weight: bold;">Barang Keluar</a>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/home" title="Home">
                                <i class="fas fa-home" style="font-size: 20px;"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="Search">
                                <i class="fas fa-search" style="font-size: 20px;"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="Notifications">
                                <i class="fas fa-bell" style="font-size: 20px;"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="Settings">
                                <i class="fas fa-cogs" style="font-size: 20px;"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container mt-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <a href="inputtransaksi" class="btn btn-primary btn-sm" style="font-weight: bold;">
                                <i class="fas fa-plus"></i> Input Transaksi
                            </a>
                        </div>

                        <!-- Filter Data -->
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <form class="row g-3" method="get" action="">
                                    <div class="col-md-4">
                                        <label for="startDate" class="form-label">Dari Tanggal</label>
                                        <input type="date" id="startDate" name="startDate" class="form-control"
                                            value="<?= isset($_GET['startDate']) ? $_GET['startDate'] : ''; ?>" required>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="endDate" class="form-label">Sampai Tanggal</label>
                                        <input type="date" id="endDate" name="endDate" class="form-control"
                                            value="<?= isset($_GET['endDate']) ? $_GET['endDate'] : ''; ?>" required>
                                    </div>
                                    <div class="col-md-3 align-self-end d-flex gap-2">
                                        <button type="submit" class="btn btn-primary w-50" style="font-weight: bold;">Tampilkan</button>
                                        <a href="/barangkeluar" class="btn btn-secondary w-50" style="font-weight: bold;">Reset</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Tabel -->
                        <div class="table-responsive bg-white shadow-sm rounded p-3">
                            <table class="table table-bordered table-striped mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Faktur</th>
                                        <th>Tanggal</th>
                                        <th>Pelanggan</th>
                                        <th>Total Harga (Rp)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($barang_keluar)): ?>
                                        <?php foreach ($barang_keluar as $key => $item): ?>
                                            <tr>
                                                <td><?= $key + 1; ?></td>
                                                <td><?= $item['id_keluar']; ?></td>
                                                <td><?= $item['tanggal_keluar']; ?></td>
                                                <td><?= $item['nama_customer']; ?></td>
                                                <td><?= number_format($item['harga_hp'], 0, ',', '.'); ?></td>
                                                <td>
                                                    <a href="/barangkeluar/edit/<?= $item['id_keluar']; ?>" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                        <a href="/barangkeluar/delete/<?= $item['id_keluar']; ?>" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                            <i class="fas fa-trash"></i> Hapus
                                                        </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination -->
                        <div class="mt-3">
                            <?= $pager->links('default', 'default_full'); ?>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Haykal Aditya Saputra || 23.240.0023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript -->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages -->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>
</body>

</html>