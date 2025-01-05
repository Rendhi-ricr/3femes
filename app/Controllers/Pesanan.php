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
        $keranjangItems = $keranjangModel->getKeranjangItems(session_id());
        $pengiriman = $pengiriman->findAll();

        return view('front/checkout', ['keranjangItems' => $keranjangItems, 'kurir' => $pengiriman]);
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
