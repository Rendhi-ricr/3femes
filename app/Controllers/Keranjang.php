<?php

namespace App\Controllers;

use App\Models\ProdukModels;
use App\Models\KeranjangModel;

class Keranjang extends BaseController
{
    public function index()
    {
        $keranjangModel = new KeranjangModel();
        $keranjangItems = $keranjangModel->getKeranjangItems(session_id());

        return view('front/detail_produk', ['keranjangItems' => $keranjangItems]);
    }

    public function simpan()
    {
        $keranjangModel = new KeranjangModel();
        $keranjangModel->save([
            'id_produk' => $this->request->getPost('id_produk'),
            'ukuran' => $this->request->getPost('size'),
            'jumlah' => $this->request->getPost('qty'),
        ]);
        return redirect()->to('/produk')->with('success', 'Beasiswa berhasil Ditambahkan');
    }

    // public function tambah($id_produk)
    // {
    //     $keranjangModel = new KeranjangModel();
    //     $keranjangModel->tambahKeKeranjang(session_id(), $id_produk);


    //     return redirect()->to('/keranjang');
    // }

    public function hapus($id_keranjang)
    {
        $keranjangModel = new KeranjangModel();
        $keranjangModel->hapusDariKeranjang($id_keranjang);

        return redirect()->to('/keranjang');
    }
}
