<?php

namespace App\Controllers;

use App\Models\PesananModel;
use App\Models\DetailPesananModel;
use App\Models\KeranjangModel;
use App\Models\PengirimanModels;

class Pesanan extends BaseController
{
    public function checkout()
    {
        $keranjangModel = new KeranjangModel();
        $pengiriman = new PengirimanModels();

        // Ambil data keranjang
        $keranjangItems = $keranjangModel->getKeranjangItems(session_id());
        $pengiriman = $pengiriman->findAll();

        // Ambil nama pengguna dari session
        $nama = session()->get('nama_lengkap');

        return view('front/checkout', [
            'keranjangItems' => $keranjangItems,
            'kurir' => $pengiriman,
            'nama' => $nama, // Kirim nama pengguna ke view
        ]);
    }


    public function buatPesanan()
    {
        $pesananModel = new PesananModel();
        $detailPesananModel = new DetailPesananModel();
        $keranjangModel = new KeranjangModel();

        $data = $this->request->getPost();
        $keranjangItems = $keranjangModel->getKeranjangItems(session_id());
        $totalHarga = array_sum(array_map(function ($item) {
            return $item['harga'] * $item['jumlah'];
        }, $keranjangItems));

        $pesananId = $pesananModel->buatPesanan($data, $totalHarga);

        foreach ($keranjangItems as $item) {
            $detailPesananModel->tambahDetailPesanan($pesananId, $item);
        }

        $keranjangModel->kosongkanKeranjang(session_id());

        return redirect()->to('/produk');
    }
}
