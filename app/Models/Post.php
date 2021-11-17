<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-Post-Pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Repellat possimus, temporibus mollitia assumenda eius porro harum.
             Quidem neque obcaecati soluta consequatur? Nulla doloremque commodi ex quas distinctio vel itaque cum?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-Post-Kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Repellat possimus, temporibus mollitia assumenda eius porro harum.
             Quidem neque obcaecati soluta consequatur? Nulla doloremque commodi ex quas distinctio vel itaque cum?"
        ]
        ];


        public static function all()
        {
            return self::$blog_posts;
        }

        public static function find($slug)
        {
            $posts = self::$blog_posts;
            $post = [];
            foreach($posts as $p) {
                if($p["slug"] === $slug) {
                    $post = $p;
            }
        }
        return $posts;
        }
}
