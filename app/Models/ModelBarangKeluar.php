<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBarangKeluar extends Model
{
    protected $table = 'barang_keluar'; // Nama tabel
    protected $primaryKey = 'id_keluar'; // Primary key
    protected $allowedFields = ['imei_hp', 'id_customer', 'tanggal_keluar']; // Kolom yang dapat diisi

    public function getBarangKeluar($startDate = null, $endDate = null, $limit = 5, $offset = 0)
    {
        $builder = $this->select('barang_keluar.*, customer.nama_customer, hp.merk_hp, hp.tipe_hp, hp.harga_hp')
            ->join('customer', 'customer.id_customer = barang_keluar.id_customer')
            ->join('hp', 'hp.imei_hp = barang_keluar.imei_hp');

        // Filter tanggal jika ada
        if ($startDate && $endDate) {
            $builder->where('tanggal_keluar >=', $startDate)
                ->where('tanggal_keluar <=', $endDate);
        }

        // Tambahkan limit dan offset
        $builder->limit($limit, $offset);

        return $builder->get()->getResultArray();
    }


    public function getCountBarangKeluar($startDate = null, $endDate = null)
    {
        $builder = $this->select('COUNT(*) as total')
            ->join('customer', 'customer.id_customer = barang_keluar.id_customer')
            ->join('hp', 'hp.imei_hp = barang_keluar.imei_hp');

        // Filter tanggal jika ada
        if ($startDate && $endDate) {
            $builder->where('tanggal_keluar >=', $startDate)
                ->where('tanggal_keluar <=', $endDate);
        }

        $result = $builder->get()->getRow();
        return $result ? $result->total : 0;
    }

    public function updateBarangKeluar($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteBarangKeluar($id)
    {
        return $this->delete($id);
    }
}
