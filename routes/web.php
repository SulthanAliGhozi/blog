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
    return view('posts', ['head' => 'Blog Page', 'titles' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(6)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    if (!$post) {
        return view('post', ['post' => abort(404)]);
    }
    return view('post', ['post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {

    return view('posts', ['head' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['head' => 'Articles in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['head' => 'Contact Page', 'titles' => 'Contact']);
});

Route::get('/404', function () {
    return view('404');
});

Route::resource(
    '/products',
    \App\Http\Controllers\ProductController::class
);

