<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function datasiswa()
    {
        # code...
        $nama = 'Agung Wahyudi';
        return $nama;
    }

    public function datasiswi()
    {
        # code...
        $nama = 'Ajeng';
        return $nama;
    }

    public function nama($nama = 'can diisian')
    {
        return 'nama anda adalah : ' .$nama;
    }
}
