<?php

namespace App\Controllers;

use App\Models\ModelInputTransaksi;

class InputTransaksiController extends BaseController
{
    protected $transaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new ModelInputTransaksi();
    }

    public function index()
    {
        $data = [
            'transaksi' => $this->transaksiModel->getAllTransaksi()
        ];

        return view('input_transaksi', $data);
    }

    public function simpan()
    {
        $data = [
            'id_keluar' => $this->request->getPost('id_keluar'),
            'imei_hp' => $this->request->getPost('imei_hp'),
            'id_customer' => $this->request->getPost('id_customer'),
            'tanggal_keluar' => $this->request->getPost('tanggal_keluar'),
        ];

        try {
            $this->transaksiModel->insert($data);
        } catch (\Exception $e) {
            session()->setFlashdata('error', 'Gagal menambahkan data transaksi: ' . $e->getMessage());
        }

        return redirect()->to('/input-transaksi');
    }
    
}
