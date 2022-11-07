<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pos Pertama",
            "slug" => "judul-pos-pertama",
            "author" => "Rizki",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, in labore exercitationem voluptas fuga perferendis aspernatur aliquid. Libero perferendis impedit labore nostrum sed laboriosam non magni sapiente, ratione quaerat nisi minus laudantium, deserunt hic? Quo, accusantium. Explicabo consectetur quo vitae at. Placeat nam saepe sunt repellendus libero optio facilis. Magnam dignissimos obcaecati consequuntur necessitatibus totam? Repellendus aliquam totam quaerat vero a magni saepe nemo sunt error itaque est, dolore provident vitae dicta, omnis quo voluptatibus enim ipsa excepturi at. Officia debitis illo quidem tempora et eveniet fugit maxime ipsa deleniti?"
        ],

        [
            "title" => "Judul Pos Kedua",
            "slug" => "judul-pos-kedua",
            "author" => "Doni",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, in labore exercitationem voluptas fuga perferendis aspernatur aliquid. Libero perferendis impedit labore nostrum sed laboriosam non magni sapiente, ratione quaerat nisi minus laudantium, deserunt hic? Quo, accusantium. Explicabo consectetur quo vitae at. Placeat nam saepe sunt repellendus libero optio facilis. Magnam dignissimos obcaecati consequuntur necessitatibus totam? Repellendus aliquam totam quaerat vero a magni saepe nemo sunt error itaque est, dolore provident vitae dicta, omnis quo voluptatibus enim ipsa excepturi at. Officia debitis illo quidem tempora et eveniet fugit maxime ipsa deleniti?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
