<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{
    protected $table = 't_keranjang';
    protected $primaryKey = 'id_keranjang';
    protected $allowedFields = ['id_produk', 'ukuran', 'jumlah', 'session_id'];

    public function getKeranjangItems($sessionId)
    {
        return $this->select('t_keranjang.*, t_produk.nama_produk, t_produk.harga')
            ->join('t_produk', 't_produk.id_produk = t_keranjang.id_produk')
            ->where('session_id', $sessionId)
            ->findAll();
    }

    public function tambahKeKeranjang($sessionId, $id_produk)
    {
        $this->insert(['session_id' => $sessionId, 'id_produk' => $id_produk, 'jumlah' => 1]);
    }

    public function hapusDariKeranjang($id_keranjang)
    {
        $this->delete($id_keranjang);
    }

    public function kosongkanKeranjang($sessionId)
    {
        $this->where('session_id', $sessionId)->delete();
    }
}
