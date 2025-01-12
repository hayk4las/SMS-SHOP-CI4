<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSupplier extends Model
{
    protected $table = 'supplier';
    protected $primaryKey = 'id_supplier';
    protected $allowedFields = ['id_supplier','nama_supplier', 'alamat', 'telepon']; // Sesuaikan dengan kolom tabel supplier
}
