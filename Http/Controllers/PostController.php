<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::all(); // Lấy tất cả bài viết từ model
        return view('posts.index', compact('posts')); // Trả về view
    }

    public function create() { /* ... */ }
    public function store(Request $request) { /* ... */ }
    public function show(Post $post) { /* ... */ }
    public function edit(Post $post) { /* ... */ }
    public function update(Request $request, Post $post) { /* ... */ }
    public function destroy(Post $post) { /* ... */ }
}
