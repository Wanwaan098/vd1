<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// Route cho trang chủ
Route::get('/', [HomeController::class, 'index']);

// Route để hiển thị danh sách bài viết
Route::get('/posts', [PostController::class, 'index']);

// Route khác
Route::get('/example-static', function () {
    return 'Hello World';
});


