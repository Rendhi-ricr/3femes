<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModels extends Model
{
    protected $table = 't_produk';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = ['nama_produk', 'deskripsi', 'harga', 'kategori', 'qty', 'gambar'];

    public function data_beasiswa($id_produk)
    {
        return $this->find($id_produk);
    }

    public function update_data($data, $id_produk)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_produk' => $id_produk)
        );
        return $query;
    }

    public function delete_data($id_produk)
    {
        $query = $this->db->table($this->table)->delete(array('id_produk' => $id_produk));
        return $query;
    }

    public function get_produk_by_kategori($kategori)
    {
        return $this->where('kategori', $kategori)->findAll();
    }
}
