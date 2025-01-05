<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPesananModel extends Model
{
    protected $table = 't_detail_pesanan';
    protected $primaryKey = 'id_detail_pesanan';
    protected $allowedFields = ['id_pesanan', 'id_produk', 'jumlah', 'harga'];

    // Menambahkan relasi dengan tabel pesanan (optional)
    public function getDetailPesanan($pesananId)
    {
        return $this->where('id_pesanan', $pesananId)->findAll();
    }

    // Menambahkan detail pesanan
    public function tambahDetailPesanan($pesananId, $item)
    {
        $data = [
            'id_pesanan' => $pesananId,
            'id_produk'  => $item['id_produk'],
            'jumlah'     => $item['jumlah'],
            'harga'      => $item['harga'],
        ];

        return $this->save($data); // Menyimpan data ke tabel
    }
}
