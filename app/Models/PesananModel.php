<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 't_pesanan';
    protected $allowedFields = ['id_pengiriman', 'nama_pelanggan', 'email_pelanggan', 'alamat_pelanggan', 'total_harga'];

    public function buatPesanan($data, $totalHarga)
    {
        $pesananData = [
            'id_pengiriman' => $data['id_pengiriman'],
            'nama_pelanggan' => $data['nama'],
            'email_pelanggan' => $data['email'],
            'alamat_pelanggan' => $data['alamat'],
            'total_harga' => $totalHarga
        ];
        $this->insert($pesananData);

        return $this->getInsertID();
    }
}
