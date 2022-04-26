<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPerpustakaan extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function tentang(){
        return view('tentangkami');
    }

    public function domaindanhosting(){
        return view('layanan.domaindanhosting');
    }
}
