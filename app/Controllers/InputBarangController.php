<?php

namespace App\Controllers;

use App\Models\ModelInputBarang;

class InputBarangController extends BaseController
{
    protected $modelInputBarang;

    public function __construct()
    {
        $this->modelInputBarang = new ModelInputBarang();
    }

    public function index()
    {
        $data = [
            'suppliers' => $this->modelInputBarang->getSuppliers(),
        ];
        return view('input_barang', $data);
    }

    public function save()
    {
        // Ambil data dari form
        $imeiHp = $this->request->getPost('imei');

        // Simpan data HP ke tabel `hp`
        $dataHp = [
            'imei_hp'   => $imeiHp,
            'merk_hp'   => $this->request->getPost('merk'),
            'tipe_hp'   => $this->request->getPost('tipe'),
            'memory_hp' => $this->request->getPost('memori'),
            'warna_hp'  => $this->request->getPost('warna'),
            'harga_hp'  => $this->request->getPost('harga'),
        ];
        $this->modelInputBarang->saveHp($dataHp);

        // Simpan data barang masuk ke tabel `barang_masuk`
        $dataBarangMasuk = [
            'id_masuk'     => $this->request->getPost('faktur'), // Faktur sebagai id_masuk
            'imei_hp'      => $imeiHp,
            'id_supplier'  => $this->request->getPost('supplier'),
            'tanggal_masuk' => $this->request->getPost('tanggalFaktur'),
        ];
        $this->modelInputBarang->saveBarangMasuk($dataBarangMasuk);

        return redirect()->to('/input_barang')->with('success', 'Data berhasil disimpan');
    }
}
