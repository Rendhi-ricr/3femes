<?php

namespace App\Controllers;

use App\Models\KeranjangModel;

class Keranjang extends BaseController
{
    public function index()
    {
        $keranjangModel = new KeranjangModel();
        $idUser = session()->get('id_user'); // Ambil id_user dari session
        $sessionId = session_id(); // Ambil session_id

        // Ambil keranjang berdasarkan id_user jika login, atau session_id jika tidak login
        $keranjangItems = $keranjangModel->getKeranjangItems($sessionId, $idUser);

        // Jika tidak login, kosongkan keranjang
        $keranjangItems = $idUser ? $keranjangItems : [];

        // Tampilkan view
        return view('front/detail_produk', [
            'keranjangItems' => $keranjangItems,
        ]);
    }

    public function simpan()
    {
        $keranjangModel = new KeranjangModel();
        $idUser = session()->get('id_user'); // Ambil id_user dari session
        $sessionId = session_id(); // Ambil session_id

        if (!$idUser) {
            return redirect()->to('/login')->with('error', 'Silakan login untuk menambahkan ke keranjang.');
        }

        $data = [
            'id_produk' => $this->request->getPost('id_produk'),
            'ukuran' => $this->request->getPost('size'),
            'jumlah' => $this->request->getPost('qty'),
        ];

        $keranjangModel->tambahKeKeranjang($sessionId, $idUser, $data);

        return redirect()->to('/produk')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    public function hapus($id_keranjang)
    {
        $keranjangModel = new KeranjangModel();
        $keranjangModel->hapusDariKeranjang($id_keranjang);

        return redirect()->to('/keranjang');
    }
}
