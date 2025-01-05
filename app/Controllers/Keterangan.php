<?php

namespace App\Controllers;

class Keterangan extends BaseController
{
    public function index()
    {
        $id_produk = $this->request->getGet('id_produk');
        $nama_produk = $this->request->getGet('nama_produk');
        $harga = $this->request->getGet('harga');
        $gambar = $this->request->getGet('gambar');
        $kategori = $this->request->getGet('kategori'); // Tangkap kategori

        $data = [
            'id_produk' => $id_produk,
            'nama_produk' => $nama_produk,
            'harga' => $harga,
            'gambar' => $gambar,
            'kategori' => $kategori,
        ];

        return view('front/keterangan', $data);
    }
}
