<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    protected $table = "user";
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'password'];

    // ModelLogin.php
    public function registerUser($data)
    {
        return $this->insert($data); // Menyimpan data user ke tabel
    }
}
