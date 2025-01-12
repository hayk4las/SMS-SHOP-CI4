<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBarangMasuk extends Model
{
    protected $table = 'barang_masuk'; // Nama tabel
    protected $primaryKey = 'id_masuk'; // Primary key
    protected $allowedFields = ['imei_hp', 'id_supplier', 'tanggal_masuk']; // Kolom yang diizinkan

    // Fungsi untuk mendapatkan data barang masuk dengan supplier
    public function getBarangMasukWithSupplier($limit, $offset)
    {
        return $this->select('barang_masuk.*, supplier.nama_supplier, hp.merk_hp, hp.tipe_hp, hp.memory_hp, hp.warna_hp, hp.harga_hp')
            ->join('supplier', 'barang_masuk.id_supplier = supplier.id_supplier')
            ->join('hp', 'barang_masuk.imei_hp = hp.imei_hp')
            ->paginate($limit, 'barang_masuk_group', $offset);
    }

    public function searchBarangMasuk($keyword, $limit, $offset)
    {
        return $this->select('barang_masuk.*, supplier.nama_supplier, hp.merk_hp, hp.tipe_hp, hp.memory_hp, hp.warna_hp, hp.harga_hp')
            ->join('supplier', 'barang_masuk.id_supplier = supplier.id_supplier')
            ->join('hp', 'barang_masuk.imei_hp = hp.imei_hp')
            ->like('hp.merk_hp', $keyword) // Filter berdasarkan merk_hp
            ->paginate($limit, 'barang_masuk_group', $offset);
    }

    public function countBarangMasuk()
    {
        return $this->countAllResults();
    }
}
