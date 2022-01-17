<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] == $slug) {
        //         $post = $p;
        //     }
        // }

        //penggunaan method pada collect. menggantikan koding yang diatas
        return $posts->firstWhere('slug', $slug); //artinya mencari slug yang pertama, yang == slug
    }
}
