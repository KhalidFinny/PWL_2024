<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama: Muhammad khalid Atthoriq <br>
        NIM: 2341720114';
    }

    public function articles()
    {
        $postId = request('id');
        return 'halaman ke-'.$postId;
    }
}
