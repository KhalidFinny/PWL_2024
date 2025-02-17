<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles()
    {
        $postId = request('id');
        return 'halaman ke-'.$postId.
        'Ini ArticleController';
    }
}
