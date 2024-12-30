<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Pembayaran extends BaseController
{
    public function index()
    {
        return view('back/pembayaran/index');
    }
}
