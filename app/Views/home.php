<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sms Shop || Dashboard</title>

    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 150px;
        }

        .card-body {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 100%;
        }

        .card-body i {
            font-size: 24px;
        }

        .card-body .text {
            font-size: 18px;
            font-weight: bold;
        }

        .card-body .number {
            font-size: 24px;
            font-weight: bold;
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
            <li class="nav-item">
                <a class="nav-link" href="/kelolapelanggan">
                    <i class="fas fa-users"></i>
                    <span>Daftar Pelanggan</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="/kelolasupplier">
                    <i class="fas fa-box"></i>
                    <span>Daftar Supplier</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
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
                    <a class="navbar-brand" href="#" style="font-size: 24px; font-weight: bold;">DASHBOARD SISTEM STOK SMS SHOP</a>
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
                    <div class="container mt-4">
                        <div class="row mt-3">
                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div class="text">Jumlah Semua HP</div>
                                            <div class="number"><?= $total_hp; ?></div>
                                        </div>
                                        <i class="fas fa-mobile-alt text-success"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div class="text">Jumlah Barang Keluar</div>
                                            <div class="number"><?= $total_barang_keluar; ?></div> <!-- Menampilkan jumlah barang keluar -->
                                        </div>
                                        <i class="fas fa-arrow-up text-primary"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div class="text">Jumlah Barang Masuk</div>
                                            <div class="number"><?= $total_barang_masuk; ?></div> <!-- Menampilkan jumlah barang masuk -->
                                        </div>
                                        <i class="fas fa-arrow-down text-info"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div class="text">Jumlah Transaksi</div>
                                            <div class="number"><?= $total_transaksi; ?></div> <!-- Menampilkan jumlah transaksi -->
                                        </div>
                                        <i class="fas fa-file-invoice text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i5q5YlF0yn4l+4a5+5b5Q5p5y5D" crossorigin="anonymous"></script>
                </div>
            </div>
        </div>
    </div>

    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Haykal Aditya Saputra || 23.240.0023</span>
            </div>
        </div>
    </footer>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>