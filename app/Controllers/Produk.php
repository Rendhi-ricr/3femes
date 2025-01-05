<?php

namespace App\Controllers;

use App\Models\ProdukModels;

class Produk extends BaseController
{
    public function index()
    {
        // $produkModel = new ProdukModels();

        // // Ambil produk dengan kategori 'Banana Boat'
        // $produk = $produkModel->get_produk_by_kategori('Cireng Isi');

        return view('front/produk');
    }

    public function kp()
    {
        $produkModel = new ProdukModels();

        // Ambil produk dengan kategori 'Banana Boat'
        $produk = $produkModel->get_produk_by_kategori('Keripik Pisang');

        return view('front/keripik_pisang', ['produk' => $produk]);
    }

    public function bb()
    {
        $produkModel = new ProdukModels();

        // Ambil produk dengan kategori 'Banana Boat'
        $produk = $produkModel->get_produk_by_kategori('Banana Boat');

        // Kirim data produk ke view
        return view('front/banana', ['produk' => $produk]);
    }
}
