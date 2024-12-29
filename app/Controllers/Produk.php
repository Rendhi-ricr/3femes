<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function index()
    {
        return view('front/produk');
    }

    public function kp()
    {
        return view('front/keripik_pisang');
    }

    public function bb()
    {
        return view('front/banana');
    }
}
