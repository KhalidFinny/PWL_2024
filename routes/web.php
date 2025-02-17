<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/hello', function () {
//     return 'Hello World';
//     });

Route::get('/world', function () {
    return 'World';
    });

Route::get('/selamat', function () {
return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Nama: Muhammad khalid Atthoriq <br>
    NIM: 2341720114';
    });

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
    });

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function() {
    $postId = request('id');
    return 'halaman ke-'.$postId;
});

Route::get('/user/{name?}', function($name =null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });

Route::View('/welcome', 'yes');

Route::get('/hello',
[WelcomeController::class, 'hello']);

Route::get('/',
[PageController::class, 'index']);

Route::get('/about',
[PageController::class, 'about']);

Route::get('/articles/{id}',
[PageController::class, 'articles']);

Route::get('/home',
[HomeController::class, 'index']);

Route::get('/aboutme',
[AboutController::class, 'about']);

Route::get('/artikel/{id}',
[ArticleController::class, 'articles']);

Route::get('photos',[PhotoController::class]);

Route::resource('photos', PhotoController::class)->only([
'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
'create', 'store', 'update', 'destroy'
]);
