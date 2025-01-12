<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 // Rute untuk halaman utama (login)
$routes->get('/', 'LoginController::index');

// Rute untuk login (POST)
$routes->post('/login', 'LoginController::login');
$routes->get('/logout', 'LoginController::logout');

//rute untuk register
$routes->get('/register', 'RegisterController::index');
$routes->post('/register', 'RegisterController::register');

// Rute untuk halaman home setelah login
$routes->get('/home', 'HomeController::index');

// Rute untuk manajemen barang
$routes->get('/stokbarang', 'StokBarangController::index');
$routes->get('/barangmasuk', 'BarangMasukController::index');
$routes->get('/inputbarang', 'InputBarangController::index');
$routes->get('/barangkeluar', 'BarangKeluarController::index');
$routes->get('/kelolasupplier', 'KelolaSupplierController::index');
$routes->get('/inputtransaksi', 'InputTransaksiController::index');
$routes->get('/editbarangmasuk', 'EditBarangMasukController::index');


// rute hapus barangmasuk dan rute edit barangmasuk
$routes->post('/barangmasuk/delete/(:any)', 'BarangMasukController::delete/$1');
$routes->get('/barangmasuk/edit/(:any)', 'BarangMasukController::edit/$1');
$routes->post('/barangmasuk/update/(:any)', 'BarangMasukController::update/$1');
//Rute untuk kembali setelah barang berhasil terhapus
$routes->get('/barang_masuk', 'BarangMasukController::index');

//Rute Save Akan Tampil di Barang Masuk
$routes->post('input_barang/save', 'InputBarangController::save');
//Rute After Save Input Kembali
$routes->get('input_barang', 'InputBarangController::index');

//Rute Input Transaksi
$routes->get('/input-transaksi', 'InputTransaksiController::index');
$routes->post('/input-transaksi/simpan', 'InputTransaksiController::simpan');

//Rute Untuk Kelola Pelanggan Tambah & Simpan
$routes->get('/kelolapelanggan', 'KelolaPelangganController::index');
$routes->get('/kelolapelanggan/tambah', 'KelolaPelangganController::tambah');
$routes->post('/kelolapelanggan/simpan', 'KelolaPelangganController::simpan');
$routes->get('/kelolapelanggan/hapus/(:segment)', 'KelolaPelangganController::hapus/$1');
$routes->get('/kelolapelanggan/edit/(:segment)', 'KelolaPelangganController::edit/$1');
$routes->post('/kelolapelanggan/update', 'KelolaPelangganController::update');


// rute untuk barang keluar update data dan rute untuk barangkeluar delete
$routes->get('barangkeluar/edit/(:any)', 'BarangKeluarController::edit/$1');
$routes->post('barangkeluar/update/(:any)', 'BarangKeluarController::update/$1');
$routes->get('barangkeluar/delete/(:any)', 'BarangKeluarController::delete/$1');

// rute untuk export to pdf
$routes->get('/stokbarang/exportToPdf', 'StokBarangController::exportToPdf');

//rute untuk kelolasupplier edit dan delete
$routes->get('/kelolasupplier/edit/(:segment)', 'KelolaSupplierController::edit/$1');
$routes->post('/kelolasupplier/update/(:segment)', 'KelolaSupplierController::update/$1');
$routes->get('/kelolasupplier/delete/(:segment)', 'KelolaSupplierController::delete/$1');
$routes->get('/kelolasupplier/create', 'KelolaSupplierController::create');
$routes->post('/kelolasupplier/store', 'KelolaSupplierController::store');





















