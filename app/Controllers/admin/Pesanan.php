<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Pesanan extends BaseController
{
    public function index()
    {
        return view('back/pesanan/index');
    }
}
