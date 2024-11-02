<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array {
        $post = Arr::first(static::all(),fn($post) => $post['slug'] == $slug);

        if(! $post) {
            abort(404);
        }

        return $post;
    }
}