<?php

namespace App\Controllers;

use App\Models\ModelBarangMasuk;

class BarangMasukController extends BaseController
{
    public function index()
    {
        $model = new ModelBarangMasuk();

        // Ambil keyword dari query string (search)
        $keyword = $this->request->getGet('search');
        $limit = 5; // Data per halaman
        $offset = (int) $this->request->getGet('page_barang_masuk') * $limit; // Menentukan halaman saat ini

        if ($keyword) {
            // Jika ada keyword, cari data
            $data['barang_masuk'] = $model->searchBarangMasuk($keyword, $limit, $offset);
        } else {
            // Jika tidak ada keyword, tampilkan semua data
            $data['barang_masuk'] = $model->getBarangMasukWithSupplier($limit, $offset);
        }

        // Hitung total data
        $data['total_data'] = $model->countBarangMasuk();

        $data['keyword'] = $keyword; // Kirim keyword ke view untuk ditampilkan di search bar
        $data['pager'] = $model->pager; // Menambahkan pager untuk pagination

        return view('barang_masuk', $data);
    }

    public function delete($id_masuk)
    {
        $model = new ModelBarangMasuk();

        if ($model->delete($id_masuk)) {
            return redirect()->to('/barang_masuk')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->to('/barang_masuk')->with('error', 'Gagal menghapus data');
        }
    }

    public function edit($id_masuk)
    {
        $modelBarangMasuk = new \App\Models\ModelBarangMasuk();
        $modelSupplier = new \App\Models\ModelSupplier(); // Pastikan Anda punya model untuk supplier

        // Ambil data barang masuk berdasarkan ID
        $barang_masuk = $modelBarangMasuk->find($id_masuk);

        if (!$barang_masuk) {
            return redirect()->to('/barang_masuk')->with('error', 'Data tidak ditemukan.');
        }

        // Ambil semua supplier
        $suppliers = $modelSupplier->findAll();

        $data = [
            'barang_masuk' => $barang_masuk,
            'suppliers' => $suppliers, // Kirim data supplier ke view
        ];

        return view('edit_barang_masuk', $data);
    }



    public function update($id_masuk)
    {
        $model = new \App\Models\ModelBarangMasuk();

        // Validasi input
        if (!$this->validate([
            'imei_hp' => 'required',
            'id_supplier' => 'required',
            'tanggal_masuk' => 'required|valid_date',
        ])) {
            return redirect()->back()->withInput()->with('error', 'Validasi gagal, periksa kembali data yang diisi.');
        }

        // Data untuk diperbarui
        $data = [
            'imei_hp' => $this->request->getPost('imei_hp'),
            'id_supplier' => $this->request->getPost('id_supplier'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk'),
        ];

        // Update data
        if ($model->update($id_masuk, $data)) {
            return redirect()->to('/barang_masuk')->with('success', 'Data berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data.');
        }

        if (!$this->validate([
            'id_supplier' => 'required|is_not_unique[supplier.id_supplier]', // Pastikan id_supplier ada di tabel supplier
            'imei_hp' => 'required',
            'tanggal_masuk' => 'required|valid_date',
        ])) {
            return redirect()->back()->withInput()->with('error', 'Validasi gagal, periksa kembali data yang diisi.');
        }
    }
}
