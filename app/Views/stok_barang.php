<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sms Shop || Stok Barang</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
                    <a class="navbar-brand" href="#" style="font-size: 24px; font-weight: bold;">Stok Barang</a>

                    <!-- Ikon tambahan -->
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
                        <div class="container">

                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <!-- Display total data count -->
                                    <button class="btn btn-success btn-sm me-2" style="font-weight: bold;">Total Data: <?= $total_data; ?></button>

                                    <!-- Display export button with icon -->

                                    <a href="<?= base_url('/stokbarang/exportToPdf'); ?>" class="btn btn-danger btn-sm ms-1" style="font-weight: bold;">
                                        <i class="fas fa-download"></i> Export to PDF
                                    </a>

                                </div>
                            </div>

                            <!-- Search Barang -->
                            <div class="input-group mb-3">
                                <form action="<?= base_url('/stokbarang'); ?>" method="get" class="w-100 d-flex">
                                    <input type="text" name="search" class="form-control" placeholder="Cari data berdasarkan Merk" aria-label="Cari" value="<?= isset($keyword) ? esc($keyword) : ''; ?>">
                                    <button class="btn btn-outline-success" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>

                            <!-- Tabel -->
                            <div class="table-responsive bg-white shadow-sm rounded p-3">
                                <table class="table table-bordered table-striped mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>No</th>
                                            <th>IMEI</th>
                                            <th>Merk</th>
                                            <th>Tipe</th>
                                            <th>Memori</th>
                                            <th>Warna</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($stok_barang) && is_array($stok_barang)): ?>
                                            <?php foreach ($stok_barang as $key => $barang): ?>
                                                <tr>
                                                    <td><?= $start + $key + 1; ?></td> <!-- Nomor tidak reset -->
                                                    <td><?= esc($barang['imei_hp']); ?></td>
                                                    <td><?= esc($barang['merk_hp']); ?></td>
                                                    <td><?= esc($barang['tipe_hp']); ?></td>
                                                    <td><?= esc($barang['memory_hp']); ?></td>
                                                    <td><?= esc($barang['warna_hp']); ?></td>
                                                    <td>Rp <?= number_format($barang['harga_hp'], 0, ',', '.'); ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="mt-3">
                                <?= $pager->links(); ?>
                            </div>

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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i5q5YlF0yn4l+4a5+5b5Q5p5y5D" crossorigin="anonymous"></script>
</body>

</html>