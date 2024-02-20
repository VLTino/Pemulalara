<?php

namespace App\Models;


class Post 
{
    private static  $blog_posts = [
        [
            "title" => "Manusia Kecubung",
            "slug" => "Manusia-Kecubung",
            "author" => "Sayid",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur natus doloribus, aperiam dolor magnam a suscipit animi nemo eligendi atque iusto mollitia consequuntur, et sequi voluptatem delectus debitis consequatur! Facilis, commodi cupiditate. Praesentium dolore voluptas minus natus ducimus ipsam assumenda earum suscipit? Illo vero dicta dolorem, eligendi nam corporis impedit totam quae! Quae dolorem, fuga rem delectus possimus ea sunt. Vitae nesciunt velit, vel asperiores consectetur officiis exercitationem impedit ullam dolor neque sit voluptates possimus explicabo beatae voluptatum repellendus, provident iure dolores. Ullam maxime dolores, atque dicta voluptatibus consequatur numquam quisquam rem, quasi fuga, tenetur nemo ratione odit libero consectetur."
        ],
        [
            "title" => "Manusia Katak",
            "slug" => "Manusia-Katak", 
            "author" => "Adam",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur natus doloribus, aperiam dolor magnam a suscipit animi nemo eligendi atque iusto mollitia consequuntur, et sequi voluptatem delectus debitis consequatur! Facilis, commodi cupiditate. Praesentium dolore voluptas minus natus ducimus ipsam assumenda earum suscipit? Illo vero dicta dolorem, eligendi nam corporis impedit totam quae! Quae dolorem, fuga rem delectus possimus ea sunt. Vitae nesciunt velit, vel asperiores consectetur officiis exercitationem impedit ullam dolor neque sit voluptates possimus explicabo beatae voluptatum repellendus, provident iure dolores. Ullam maxime dolores, atque dicta voluptatibus consequatur numquam quisquam rem, quasi fuga, tenetur nemo ratione odit libero consectetur."
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
        // if($p["slug"] === $slug){
        //     $post = $p; 
        //     }
        // }

        return $posts->firstWhere('slug', $slug);

    }

}
