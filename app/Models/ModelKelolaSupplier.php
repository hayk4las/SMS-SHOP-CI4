<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelolaSupplier extends Model
{
    protected $table = 'supplier'; // Nama tabel
    protected $primaryKey = 'id_supplier'; // Primary key tabel
    protected $allowedFields = ['id_supplier','nama_supplier', 'email', 'telepon', 'alamat']; // Kolom yang boleh diisi
}
