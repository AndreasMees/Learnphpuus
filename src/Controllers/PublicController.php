<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $posts = [
            [
                'title' => 'World news1',
                'published' => '16.09.2025',
                'author' => 'Andreas',
                'body' => 'Some world news 1'
            ],
            [
                'title' => 'World news1',
                'published' => '17.09.2025',
                'author' => 'Kaspar',
                'body' => 'Some world news 2'
            ],
            [
                'title' => 'World news1',
                'published' => '18.09.2025',
                'author' => 'Pets',
                'body' => 'Some world news 3'
            ],
            [
                'title' => 'World news1',
                'published' => '19.09.2025',
                'author' => 'Skibidi',
                'body' => 'Some world news 4'
            ]
        ];
        view('index', compact('posts'));
    }

    public function us()
    {
        $posts = [
            [
                'title' => 'U.S news1',
                'published' => '16.09.2025',
                'author' => 'Andreas',
                'body' => 'Some U.S news 1'
            ],
            [
                'title' => 'U.S news1',
                'published' => '17.09.2025',
                'author' => 'Kaspar',
                'body' => 'Some U.S news 2'
            ],
            [
                'title' => 'U.S news1',
                'published' => '18.09.2025',
                'author' => 'Pets',
                'body' => 'Some U.S news 3'
            ],
            [
                'title' => 'U.S news1',
                'published' => '19.09.2025',
                'author' => 'Skibidi',
                'body' => 'Some U.S news 4'
            ]
        ];
        view('us', compact('posts'));
    }

    public function form()
    {
        view('form');
    }

    public function answer()
    {
        dump($_GET);
        dump($_POST);
    }
}