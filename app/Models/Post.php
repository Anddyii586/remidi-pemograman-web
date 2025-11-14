<?php

namespace App\Models;

class Post {
    public static function data() {
        return [
            [
                'id' => 1,
                'title' => 'Haidir ali 2301040011',
                'content' => 'Laptop bisnis ringan dan tangguh, cocok untuk profesional.',
                'image' => 'img/laptop1.jpg',
            ],
            [
                'id' => 2,
                'title' => 'ahmad rifandi 2301040009',
                'content' => 'Laptop gaming dengan performa tinggi dan desain futuristik.',
                'image' => 'img/laptop2.jpg',
            ],
        ];
    }

    public static function caridata($id) {
        $posts = self::data();

        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }
        return null;
    }

    public static function count() {
        return count(self::data());
    }
}
