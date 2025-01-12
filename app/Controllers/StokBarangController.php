<?php

namespace App\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;

use App\Models\ModelStokBarang;

class StokBarangController extends BaseController
{
    public function index(): string
    {
        $stokBarangModel = new ModelStokBarang();

        // Ambil parameter pencarian
        $keyword = $this->request->getGet('search');

        if ($keyword) {
            // Apply the search filter
            $stokBarangModel->like('merk_hp', $keyword);
        }

        // Pagination configuration
        $itemsPerPage = 5; // Batasan 5 data per halaman
        $page = $this->request->getGet('page') ?? 1;

        // Ambil data berdasarkan halaman
        $data['stok_barang'] = $stokBarangModel->paginate($itemsPerPage);
        $data['pager'] = $stokBarangModel->pager;

        // Get total record count (without pagination) and apply the search filter again
        $modelWithSearch = new ModelStokBarang();
        if ($keyword) {
            $modelWithSearch->like('merk_hp', $keyword);
        }
        $data['total_data'] = $modelWithSearch->countAllResults();  // Menghitung Total Semua Stok Hp

        // Kirim keyword dan nomor awal ke view
        $data['keyword'] = $keyword;
        $data['start'] = ($page - 1) * $itemsPerPage;

        return view('stok_barang', $data);
    }

    public function exportToPdf()
    {
        $stokBarangModel = new ModelStokBarang();
        
        // Ambil data barang
        $stokBarang = $stokBarangModel->findAll();
        
        // Membuat instance Dompdf
        $dompdf = new Dompdf();

        // Set options (optional)
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf->setOptions($options);

        // Prepare HTML content
        $html = view('stok_barang_pdf', ['stok_barang' => $stokBarang]);

        // Load HTML content
        $dompdf->loadHtml($html);

        // (Optional) Set paper size
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF (first pass)
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream("stok_barang.pdf", array("Attachment" => false));
    }

}
