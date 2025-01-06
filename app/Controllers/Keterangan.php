<?php

namespace App\Controllers;

class Keterangan extends BaseController
{
    public function index()
    {
        // Periksa apakah pengguna sudah login
        if (!session()->has('isLoggedIn') || !session()->get('isLoggedIn')) {
            return redirect()->to('/auth')->with('error', 'Silakan login untuk mengakses halaman ini.');
        }
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
