<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelStokBarang extends Model
{
    protected $table = "hp";
    protected $primaryKey = 'imei_hp';
    protected $allowedFields = ['merk_hp', 'tipe_hp', 'memory_hp', 'warna_hp', 'harga_hp'];

    public function updateBarangMasuk($id_masuk, $data)
    {
        return $this->update($id_masuk, $data);
    }
    
}