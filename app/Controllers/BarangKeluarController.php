<?php

namespace App\Controllers;

use App\Models\ModelBarangKeluar;

class BarangKeluarController extends BaseController
{
    public function index(): string
    {
        $model = new ModelBarangKeluar();
        $currentPage = $this->request->getVar('page') ? $this->request->getVar('page') : 1;

        // Ambil parameter tanggal
        $startDate = $this->request->getVar('startDate');
        $endDate = $this->request->getVar('endDate');

        // Hitung total data
        $totalData = $model->getBarangKeluarCount($startDate, $endDate);

        // Tentukan limit dan offset
        $limit = 5;
        $offset = ($currentPage - 1) * $limit;

        // Ambil data dari model dengan filter tanggal
        $data['barang_keluar'] = $model->getBarangKeluar($startDate, $endDate, $limit, $offset);

        // Pagination
        $data['pager'] = \Config\Services::pager();
        $data['totalData'] = $totalData;
        $data['currentPage'] = $currentPage;

        // Kirim data ke view
        return view('barang_keluar', $data);
    }

    public function edit($id)
    {
        $model = new ModelBarangKeluar();

        // Ambil data berdasarkan ID
        $data['barang_keluar'] = $model->find($id);

        if (!$data['barang_keluar']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data dengan ID $id tidak ditemukan");
        }

        // Tampilkan form edit
        return view('edit_barang_keluar', $data);
    }

    public function update($id)
    {
        $model = new ModelBarangKeluar();

        // Validasi input
        $this->validate([
            'imei_hp' => 'required',
            'id_customer' => 'required',
            'tanggal_keluar' => 'required',
        ]);

        // Data yang akan diupdate
        $data = [
            'imei_hp' => $this->request->getPost('imei_hp'),
            'id_customer' => $this->request->getPost('id_customer'),
            'tanggal_keluar' => $this->request->getPost('tanggal_keluar'),
        ];

        // Update data
        $model->updateBarangKeluar($id, $data);

        // Redirect kembali ke halaman barang keluar
        return redirect()->to('/barangkeluar')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $model = new \App\Models\ModelBarangKeluar();

        // Cek apakah data dengan ID ini ada
        $data = $model->find($id);
        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data dengan ID $id tidak ditemukan");
        }

        // Hapus data
        $model->deleteBarangKeluar($id);

        // Redirect ke halaman barang keluar dengan pesan sukses
        return redirect()->to('/barangkeluar')->with('success', 'Data berhasil dihapus!');
    }
}
