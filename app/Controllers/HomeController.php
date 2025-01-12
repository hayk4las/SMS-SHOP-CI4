<?php

namespace App\Controllers;

use App\Models\ModelStokBarang; // Model untuk stok barang
use App\Models\ModelBarangMasuk; // Model untuk barang masuk
use App\Models\ModelBarangKeluar; // Model Untuk barang keluar
use App\Models\ModelInputTransaksi; // Model untuk input transaksi

class HomeController extends BaseController
{
    public function index(): string
    {
        // Memuat model
        $stokBarangModel = new ModelStokBarang();
        $barangMasukModel = new ModelBarangMasuk();
        $barangKeluarModel = new ModelBarangKeluar();
        $transaksiModel = new ModelInputTransaksi(); // Menambahkan model transaksi


        // Menghitung data
        $totalHp = $stokBarangModel->countAll();  // Jumlah semua stok barang
        $totalBarangMasuk = $barangMasukModel->countAll(); // Jumlah barang masuk
        $totalBarangKeluar = $barangKeluarModel->countAll(); // Jumlah barang keluar
        $totalTransaksi = $transaksiModel->countAllTransaksi();

        // Kirim data ke view
        return view('home', [
            'total_hp' => $totalHp,
            'total_barang_masuk' => $totalBarangMasuk,
            'total_barang_keluar' => $totalBarangKeluar,
            'total_transaksi' => $totalTransaksi, // Tambahkan jumlah barang keluar
        ]);
    }
}
