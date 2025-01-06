<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{
    protected $table = 't_keranjang';
    protected $primaryKey = 'id_keranjang';
    protected $allowedFields = ['id_user', 'id_produk', 'ukuran', 'jumlah', 'session_id'];

    public function getKeranjangItems($sessionId, $idUser = null)
    {
        $this->select('t_keranjang.*, t_produk.nama_produk, t_produk.harga')
            ->join('t_produk', 't_produk.id_produk = t_keranjang.id_produk');

        if ($idUser) {
            $this->where('t_keranjang.id_user', $idUser);
        } else {
            $this->where('t_keranjang.session_id', $sessionId);
        }

        return $this->findAll();
    }

    public function tambahKeKeranjang($sessionId, $idUser, $data)
    {
        $data['session_id'] = $sessionId;
        $data['id_user'] = $idUser;
        $this->insert($data);
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
