<?php

namespace App\Controllers;

use App\Models\ModelKelolaPelanggan;

class KelolaPelangganController extends BaseController
{
    protected $pelangganModel;

    public function __construct()
    {
        $this->pelangganModel = new ModelKelolaPelanggan();
    }

    // Tampilkan data pelanggan
    public function index()
    {
        $data['pelanggan'] = $this->pelangganModel->getPelanggan();
        return view('kelola_pelanggan', $data);
    }

    // Tampilkan form tambah pelanggan
    public function tambah()
    {
        return view('tambah_pelanggan');
    }

    // Simpan data pelanggan
    public function simpan()
    {
        $this->pelangganModel->insert([
            'id_customer' => $this->request->getPost('id_customer'),
            'nama_customer' => $this->request->getPost('nama_customer'),
            'telepon' => $this->request->getPost('telepon'),
        ]);

        return redirect()->to('/kelolapelanggan')->with('message', 'Data berhasil ditambahkan');
    }

    // Hapus data pelanggan
    public function hapus($id_customer)
    {
        $this->pelangganModel->delete($id_customer);
        return redirect()->to('/kelolapelanggan')->with('message', 'Data berhasil dihapus');
    }

    // Edit data pelanggan
    public function edit($id_customer)
    {
        $data['pelanggan'] = $this->pelangganModel->find($id_customer);
        return view('edit_pelanggan', $data);
    }

    // Update data pelanggan
    public function update()
    {
        $id_customer = $this->request->getPost('id_customer');
        $this->pelangganModel->update($id_customer, [
            'nama_customer' => $this->request->getPost('nama_customer'),
            'telepon' => $this->request->getPost('telepon'),
        ]);

        return redirect()->to('/kelolapelanggan')->with('message', 'Data berhasil diperbarui');
    }
}
