<?php

namespace App\Models;

class Post 
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" =>"Rhivan Gabrille Demarrio",           
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nesciunt quod fugit, incidunt itaque distinctio blanditiis sunt, pariatur perspiciatis recusandae maxime quaerat tempora sed natus quidem
             earum quo eligendi reiciendis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "RGD",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nesciunt quod fugit, incidunt itaque distinctio blanditiis sunt, pariatur perspiciatis recusandae maxime quaerat tempora sed natus quidem
             earum quo eligendi reiciendis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nesciunt quod fugit, incidunt itaque distinctio blanditiis sunt, pariatur perspiciatis recusandae maxime quaerat tempora sed natus quidem
             earum quo eligendi reiciendis."
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