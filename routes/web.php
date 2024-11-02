<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Dena Astia', 'title' => 'Blog']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Dena Astia',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut aliquam nisi debitis accusamus distinctio sed reiciendis ullam magnam corrupti quo ab qui repellendus consequatur cupiditate eius magni, aspernatur deserunt porro?',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Dena Awg',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto id exercitationem labore reprehenderit libero hic itaque nihil voluptatem repudiandae? Voluptatibus dolorum, cumque omnis sequi repellat molestiae ab saepe amet culpa!',
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Dena Astia',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut aliquam nisi debitis accusamus distinctio sed reiciendis ullam magnam corrupti quo ab qui repellendus consequatur cupiditate eius magni, aspernatur deserunt porro?',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Dena Awg',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto id exercitationem labore reprehenderit libero hic itaque nihil voluptatem repudiandae? Voluptatibus dolorum, cumque omnis sequi repellat molestiae ab saepe amet culpa!',
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});