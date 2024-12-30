<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Produk extends BaseController
{
    public function index()
    {
        return view('back/produk/index');
    }
    public function tambah()
    {
        return view('back/produk/tambah');
    }
}
