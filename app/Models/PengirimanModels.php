<?php

namespace App\Models;

use CodeIgniter\Model;

class PengirimanModels extends Model
{
    protected $table = 't_pengiriman';
    protected $primaryKey = 'id_pengiriman';
    protected $allowedFields = ['nama_pengiriman', 'nominal'];

    public function data_pengiriman($id_pengiriman)
    {
        return $this->find($id_pengiriman);
    }

    public function update_data($data, $id_pengiriman)
    {
        $query = $this->db->table($this->table)->update(
            $data,
            array('id_pengiriman' => $id_pengiriman)
        );
        return $query;
    }

    public function delete_data($id_pengiriman)
    {
        $query = $this->db->table($this->table)->delete(array('id_pengiriman' => $id_pengiriman));
        return $query;
    }

    // public function get_pengiriman_by_kategori($kategori)
    // {
    //     return $this->where('kategori', $kategori)->findAll();
    // }
}
