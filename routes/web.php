<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('blog', function () {

    $posts = [
        ['id' => 1, 'title' => 'Primer Post', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Segundo Post', 'slug' => 'laravel'],
    ];
    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('blog/{slug}', function ($slug) {

    $post = $slug;

    return view('post', ['post' => $post]);
})->name('post');

