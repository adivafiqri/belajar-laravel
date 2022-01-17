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
    return view('home', [
        "title" => "home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Adiva Fiqri",
        "email" => "adivafiqrinugraha69@gmail.com",
        "image" => "adiva.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post pertama",
            "author" => "Adiva Fiqri",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est aut impedit molestiae, id aliquam facilis pariatur nam quae provident quis quod porro velit, perferendis consequuntur ipsam quidem. Fugiat quas expedita assumenda quia, autem possimus aliquid reiciendis sapiente mollitia nisi at odit obcaecati consectetur reprehenderit iusto repudiandae voluptatem rerum, explicabo nemo numquam vitae. Eius, nostrum dolorum? Quis laudantium ipsum esse similique. Libero, iure deleniti eos impedit iusto accusamus quod architecto corrupti commodi sit ipsum. Culpa placeat earum rem velit impedit voluptas."
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Akhmad Rizal",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est aut impedit molestiae, id aliquam facilis pariatur nam quae provident quis quod porro velit, perferendis consequuntur ipsam quidem. Fugiat quas expedita assumenda quia, autem possimus aliquid reiciendis sapiente mollitia nisi at odit obcaecati consectetur reprehenderit iusto repudiandae voluptatem rerum, explicabo nemo numquam vitae. Eius, nostrum dolorum? Quis laudantium ipsum esse similique. Libero, iure deleniti eos impedit iusto accusamus quod architecto corrupti commodi sit ipsum. Culpa placeat earum rem velit impedit voluptas."
        ]
    ];

    return view('posts', [
        "title" => "blog",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post pertama",
            "author" => "Adiva Fiqri",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est aut impedit molestiae, id aliquam facilis pariatur nam quae provident quis quod porro velit, perferendis consequuntur ipsam quidem. Fugiat quas expedita assumenda quia, autem possimus aliquid reiciendis sapiente mollitia nisi at odit obcaecati consectetur reprehenderit iusto repudiandae voluptatem rerum, explicabo nemo numquam vitae. Eius, nostrum dolorum? Quis laudantium ipsum esse similique. Libero, iure deleniti eos impedit iusto accusamus quod architecto corrupti commodi sit ipsum. Culpa placeat earum rem velit impedit voluptas."
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Akhmad Rizal",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est aut impedit molestiae, id aliquam facilis pariatur nam quae provident quis quod porro velit, perferendis consequuntur ipsam quidem. Fugiat quas expedita assumenda quia, autem possimus aliquid reiciendis sapiente mollitia nisi at odit obcaecati consectetur reprehenderit iusto repudiandae voluptatem rerum, explicabo nemo numquam vitae. Eius, nostrum dolorum? Quis laudantium ipsum esse similique. Libero, iure deleniti eos impedit iusto accusamus quod architecto corrupti commodi sit ipsum. Culpa placeat earum rem velit impedit voluptas."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] == $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
