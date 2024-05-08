<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Refaldy Bagas A.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate aliquid totam possimus eum ipsam voluptas! Assumenda nihil quasi alias sunt tempora! Maiores magnam officia enim ex nisi necessitatibus illo quas?'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Refaldy Bagas A.',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate aliquid totam possimus eum ipsam voluptas! Assumenda nihil quasi alias sunt tempora! Maiores magnam officia enim ex nisi necessitatibus illo quas?'
            ]
        ];
    }

    public static function find($slug) : array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}