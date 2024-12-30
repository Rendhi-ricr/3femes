<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Laporan extends BaseController
{
    public function index()
    {
        return view('back/laporan/index');
    }
}
