<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['head' => 'Home Page', 'titles' => 'Home ']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Ali', 'head' => 'About Page', 'titles' => 'About']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author','category'])->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', ['head' => 'Blog Page', 'titles' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    if (!$post) {
        return view('post', ['post' => abort(404)]);
    }
    return view('post', ['post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('author', 'category');
    return view('posts', ['head' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('author', 'category');
    return view('posts', ['head' => 'Articles in: ' . $category->name , 'posts' => $category->posts]);
});

Route::get('/contact', function () {
return view('contact', ['head' => 'Contact Page', 'titles' => 'Contact']);
});
