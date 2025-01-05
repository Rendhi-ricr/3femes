<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\ProdukModels;

class Produk extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModels();
    }

    // Tampilkan daftar produk
    public function index()
    {
        $data['produk'] = $this->produkModel->findAll(); // Ambil semua data produk
        return view('back/produk/index', $data); // Tampilkan ke view
    }

    // Tampilkan form tambah produk
    public function tambah()
    {
        return view('back/produk/tambah');
    }

    // Simpan produk baru
    public function simpan()
    {
        $fileGambar = $this->request->getFile('gambar');
        $namaGambar = '';

        // Proses upload file gambar
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move(ROOTPATH . 'public/produk', $namaGambar);
        }

        // Simpan data ke database
        $this->produkModel->save([
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'kategori' => $this->request->getPost('kategori'),
            'qty' => $this->request->getPost('qty'),
            'gambar' => $namaGambar,
        ]);

        return redirect()->to(base_url('admin/produk'))->with('success', 'Data produk berhasil ditambahkan!');
    }

    // Tampilkan form edit produk
    public function edit($id_produk)
    {
        $data['produk'] = $this->produkModel->find($id_produk);

        if (!$data['produk']) {
            return redirect()->to(base_url('admin/produk'))->with('error', 'Produk tidak ditemukan!');
        }

        return view('back/produk/edit', $data);
    }

    // Update data produk
    public function update($id_produk)
    {
        $fileGambar = $this->request->getFile('gambar');
        $produk = $this->produkModel->find($id_produk);

        if (!$produk) {
            return redirect()->to(base_url('admin/produk'))->with('error', 'Produk tidak ditemukan!');
        }

        $namaGambar = $produk['gambar'];

        // Proses upload file gambar baru
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            // Hapus gambar lama
            if ($produk['gambar'] && file_exists('public/produk/' . $produk['gambar'])) {
                unlink('public/produk/' . $produk['gambar']);
            }

            // Simpan gambar baru
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move(ROOTPATH . 'public/produk', $namaGambar);
        }

        // Update data di database
        $this->produkModel->update($id_produk, [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'kategori' => $this->request->getPost('kategori'),
            'qty' => $this->request->getPost('qty'),
            'gambar' => $namaGambar,
        ]);

        return redirect()->to(base_url('admin/produk'))->with('success', 'Data produk berhasil diperbarui!');
    }

    // Hapus produk
    public function delete($id_produk)
    {
        $produk = $this->produkModel->find($id_produk);

        // Hapus gambar jika ada
        if ($produk['gambar'] && file_exists('../public/produk/' . $produk['gambar'])) {
            unlink('../public/produk/' . $produk['gambar']);
        }

        // Hapus data dari database
        $this->produkModel->delete($id_produk);

        return redirect()->to(base_url('admin/produk'))->with('success', 'Data produk berhasil dihapus!');
    }
}
