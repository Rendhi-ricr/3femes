<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Pengiriman extends BaseController
{
    public function index()
    {
        return view('back/pengiriman/index');
    }
}
