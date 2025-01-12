<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelInputBarang extends Model
{
    protected $table = 'barang_masuk';
    protected $primaryKey = 'id_masuk';
    protected $allowedFields = ['id_masuk', 'imei_hp', 'id_supplier', 'tanggal_masuk'];

    public function saveHp($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('hp');
        $builder->insert($data);
    }

    public function saveBarangMasuk($data)
    {
        $this->insert($data);
    }

    public function getSuppliers()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('supplier');
        return $builder->get()->getResultArray();
    }
}
