<?php

namespace App\Controllers;

use App\Models\ModelKelolaSupplier;
use App\Models\ModelSupplier;

class KelolaSupplierController extends BaseController
{
    public function index()
    {
        // Instansiasi model
        $model = new ModelKelolaSupplier();

        // Jumlah data per halaman
        $perPage = 5;

        // Ambil data dengan pagination
        $data['suppliers'] = $model->paginate($perPage);

        // Kirim pagination links ke view
        $data['pager'] = $model->pager;

        // Kirim data ke view
        return view('kelola_supplier', $data);
    }

    public function create()
    {
        return view('create_supplier');
    }

    public function store()
    {
        $model = new ModelSupplier();

        $data = [
            'id_supplier' => $this->request->getPost('id_supplier'),
            'nama_supplier' => $this->request->getPost('nama_supplier'),
            'email' => $this->request->getPost('email'),
            'telepon' => $this->request->getPost('telepon'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $model->insert($data);

        return redirect()->to('/kelolasupplier')->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function edit($id_supplier)
    {
        $model = new ModelKelolaSupplier();
        $data['supplier'] = $model->find($id_supplier); // Mengambil data berdasarkan ID

        if (!$data['supplier']) {
            return redirect()->to('/kelolasupplier')->with('error', 'Data supplier tidak ditemukan.');
        }

        return view('edit_supplier', $data);
    }

    public function update($id_supplier)
    {
        $model = new ModelKelolaSupplier();
        $data = [
            'nama_supplier' => $this->request->getPost('nama_supplier'),
            'email' => $this->request->getPost('email'),
            'telepon' => $this->request->getPost('telepon'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $model->update($id_supplier, $data);
        return redirect()->to('/kelolasupplier')->with('success', 'Data supplier berhasil diperbarui.');
    }

    public function delete($id_supplier)
    {
        $model = new ModelKelolaSupplier();
        $model->delete($id_supplier);
        return redirect()->to('/kelolasupplier')->with('success', 'Data supplier berhasil dihapus.');
    }
}
