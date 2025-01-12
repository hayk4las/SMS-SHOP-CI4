<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelolaPelanggan extends Model
{
    protected $table = 'customer'; // Nama tabel di database
    protected $primaryKey = 'id_customer'; // Primary key
    protected $allowedFields = ['id_customer', 'nama_customer', 'telepon']; // Kolom yang dapat diisi

    // Ambil semua data pelanggan
    public function getPelanggan()
    {
        return $this->findAll();
    }

}
