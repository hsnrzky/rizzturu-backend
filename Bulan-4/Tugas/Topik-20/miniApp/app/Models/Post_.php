<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hasan Rizky",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque ut, amet aspernatur aperiam ipsa quasi explicabo libero eveniet quibusdam voluptatibus est et ea doloremque maxime soluta impedit consectetur. Quos nemo eos vitae omnis, repellat suscipit non! Sint voluptatibus voluptates unde atque odit perspiciatis voluptatum explicabo incidunt a! Aperiam sed, vitae molestias sit qui sapiente aliquam dolore veniam rem error alias labore? Corrupti aliquid libero qui officia reprehenderit incidunt quibusdam, sed ipsum expedita accusantium nostrum inventore cupiditate animi saepe suscipit? Animi."
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ibrahim Mandres",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis at, provident officia necessitatibus aliquam deleniti et optio nostrum quod rerum voluptates corporis magnam vel porro unde ipsam dolor consectetur aut! Repellendus quos obcaecati possimus sunt hic illum ut iure aliquam vero natus, officiis pariatur numquam unde modi enim sequi impedit dolores accusantium totam perspiciatis ipsum ducimus corporis. Consectetur excepturi omnis culpa animi voluptatem placeat quasi soluta quia nobis facere vel impedit accusamus labore reiciendis, architecto dolorem vero assumenda doloribus ipsam pariatur mollitia. Iste quasi fuga nihil consequatur sequi, sunt saepe, rem commodi repellendus recusandae natus ipsa unde, obcaecati ipsam perferendis iusto? Magnam fugiat perferendis consectetur molestiae, dicta atque saepe reprehenderit ducimus?"
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
