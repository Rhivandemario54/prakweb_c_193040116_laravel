<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
   public function index()
   {
    $title = '';
    if(request('category'))
    {
      $category = Category::firstWhere('slug', request('category'));
      $title = ' in ' . $category->name;
    }

    if(request('author')){
      $author = Category::firstWhere('username', request('author'));
      $title = ' by ' . $author->name;
    }

    return view('posts', [
    "title" => "All Posts",
    "active" => 'posts',
    "posts" =>Post::latest()->filter(request(['search', 'Category', 'author']))->paginate(7)->withQueryString()
     ]);
   }

   public function show(Post $post)
   {
    return view('post', [
    "title" => "single Post",
    "active" => 'posts',
    "post"  => $post
    ]);
   }
}
