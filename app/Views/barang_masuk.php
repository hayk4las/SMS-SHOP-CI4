<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sms Shop || Barang Masuk</title>

    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
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
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">Interface</div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Detail Barang</span>
                </a>
                <div id="collapseTwo" class="collapse" data-parent="#accordionSidebar">
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
        <!-- End Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <a class="navbar-brand" href="#" style="font-size: 24px; font-weight: bold;">Barang Masuk</a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/home" title="Home">
                                <i class="fas fa-home" style="font-size: 20px;"></i></a></li>
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
                <!-- End Topbar -->

                <!-- Page Content -->
                <div class="container-fluid">
                    <div class="container mt-4">
                        <!-- Add Data & Total Data -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <a href="/inputbarang" class="btn btn-primary btn-sm" style="font-weight: bold;">
                                    <i class="fas fa-plus"></i> Tambah Barang
                                </a>
                                <button class="btn btn-success btn-sm" style="margin-left: 5px; font-weight: bold">
                                    Total Data: <?= $total_data; ?>
                                </button>

                            </div>
                        </div>

                        <!-- Search Bar -->
                        <form method="get" action="" class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Cari data berdasarkan Merk Handphone" value="<?= isset($keyword) ? esc($keyword) : ''; ?>">
                            <button class="btn btn-outline-success btm-sm-4"><i class="fas fa-search"></i></button>
                        </form>


                        <!-- Display Success or Error Messages -->
                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Data Table -->
                        <div class="table-responsive bg-white shadow-sm rounded p-3">
                            <table class="table table-bordered table-striped mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Faktur</th>
                                        <th>Tanggal</th>
                                        <th>IMEI</th>
                                        <th>Merk</th>
                                        <th>Tipe</th>
                                        <th>Memori</th>
                                        <th>Warna</th>
                                        <th>Supplier</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($barang_masuk)) : ?>
                                        <?php foreach ($barang_masuk as $key => $row) : ?>
                                            <tr>
                                                <td><?= $key + 1; ?></td>
                                                <td><?= $row['id_masuk']; ?></td>
                                                <td><?= $row['tanggal_masuk']; ?></td>
                                                <td><?= $row['imei_hp']; ?></td>
                                                <td><?= $row['merk_hp']; ?></td>
                                                <td><?= $row['tipe_hp']; ?></td>
                                                <td><?= $row['memory_hp']; ?></td>
                                                <td><?= $row['warna_hp']; ?></td>
                                                <td><?= $row['nama_supplier']; ?></td>
                                                <td>Rp <?= number_format($row['harga_hp'], 0, ',', '.'); ?></td>
                                                <td>
                                                    <a href="<?= base_url('/barangmasuk/edit/' . $row['id_masuk']); ?>" class="btn btn-success btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    </a>
                                                    <form method="POST" action="<?= base_url('/barangmasuk/delete/') ?><?= $row['id_masuk']; ?>" style="display: inline;">
                                                        <?= csrf_field(); ?> <!-- CSRF Token -->
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="11" class="text-center">Tidak ada data</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center mt-4">
                            <?= $pager->links('barang_masuk_group', 'default_full') ?>
                        </div>
                    </div>
                </div>
                <!-- End Page Content -->
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Haykal Aditya Saputra || 23.240.0023</span>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>