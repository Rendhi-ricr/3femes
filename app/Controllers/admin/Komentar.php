<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Komentar extends BaseController
{
    public function index()
    {
        return view('back/komentar/index');
    }
}
