<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    "title" => "Home",
    "active" => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "active" => 'categories',
        "name" => "Rhivan Gabrille Demarrio",
        "email" => "Rhivandemario54@gmail.com",
        "image" => "profile.jpeg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

// halaman single

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function (){
    return view('categories', [
    'title'    => 'Post Categories',
    'active' => 'categories',
    'categories' => Category::all()
    ]);
});


// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('category', [
//         'title'    =>  "Post By Author : $category->name",
//         'active' => 'categories',
//         'posts'    => $category->posts->load('category', 'author'),
//         'category' => $category->name
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title'    => "Post By Author : $author->name",
//         'active'   => 'posts',
//         'posts'    => $author->posts->load('category', 'author'),
//     ]);
// });

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);