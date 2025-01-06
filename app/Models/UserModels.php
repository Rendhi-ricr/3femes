<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    protected $table = 't_user'; // Ganti 'users' dengan nama tabel Anda
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama_lengkap', 'no_telp', 'email', 'password'];
}
