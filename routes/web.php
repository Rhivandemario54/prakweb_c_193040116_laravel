<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('Home' ,[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Rhivan Gabrille Demarrio",
        "email" => "Rhivandemario54@gmail.com",
        "image" => "profile.jpeg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
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
        ],
    ];
    return view('posts', [
    "title" => "Posts",
    "posts" => $blog_posts
   ]);
});

// halaman single

Route::get('posts/{slug}' , function($slug){
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post){
      if($post["slug"] === $slug){
        $new_post = $post;
      }  
    }
    return view('post', [
        "title" => "single Post",
        "post"  => $new_post
    ]);

});

