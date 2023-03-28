<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Adipisci unde cum natus reiciendis vitae,
            tempore laboriosam, 
            amet voluptatem facere id, qui alias voluptas. 
            Quis pariatur rerum laborum eaque, 
            reprehenderit beatae nam non harum qui aspernatur ut temporibus, 
            eos hic iste quod. Accusamus vero quidem dolore nesciunt minima reprehenderit architecto quo similique nisi necessitatibus. 
            In voluptates quibusdam sint quisquam libero voluptate repudiandae cum. "
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Adipisci unde cum natus reiciendis vitae,
            amet voluptatem facere id, qui alias voluptas. 
            reprehenderit beatae nam non harum qui aspernatur ut temporibus, 
            eos hic iste quod. Accusamus vero quidem dolore nesciunt minima reprehenderit architecto quo similique nisi necessitatibus. 
            In voluptates quibusdam sint quisquam libero voluptate repudiandae cum. "
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
