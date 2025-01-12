<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInputTransaksi extends Model
{
    protected $table = 'barang_keluar'; // Tabel untuk menyimpan data transaksi
    protected $primaryKey = 'id_keluar';
    protected $allowedFields = ['id_keluar', 'imei_hp', 'id_customer', 'tanggal_keluar'];

    public function getAllTransaksi()
    {
        return $this->select('barang_keluar.*, hp.merk_hp, hp.tipe_hp, hp.memory_hp, hp.warna_hp, hp.harga_hp, customer.nama_customer')
                    ->join('hp', 'hp.imei_hp = barang_keluar.imei_hp')
                    ->join('customer', 'customer.id_customer = barang_keluar.id_customer')
                    ->findAll();
    }

    public function countAllTransaksi(): int
    {
        return $this->countAll(); // Menghitung semua baris di tabel transaksi
    }
}
