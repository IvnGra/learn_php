<?php

namespace App\controllers;

class PublicController
{
    public function index()
    {
        $posts = [
            [
                'title' => 'World news 1',
                'published' => '16.09.2025',
                'author' => 'Ivan',
                'body' => 'some world news body 1'
            ],
            [
                'title' => 'World news 2',
                'published' => '16.09.2024',
                'author' => 'simon',
                'body' => 'some world news body 2'
            ],
            [
                'title' => 'World news 3',
                'published' => '16.09.2023',
                'author' => 'anatoly',
                'body' => 'some world news body 3'
            ]
        ];
         view('index', compact('posts'));
    }

    public function us()
    {
        $posts = [
            [
                'title' => ' U.S news 1',
                'published' => '16.09.2025',
                'author' => 'Ivan',
                'body' => 'some U.S news body 1'
            ],
            [
                'title' => 'U.S news 2',
                'published' => '16.09.2024',
                'author' => 'simon',
                'body' => 'some U.S news body 2'
            ],
            [
                'title' => 'U.S news 3',
                'published' => '16.09.2023',
                'author' => 'anatoly',
                'body' => 'some U.S news body 3'
            ]
        ];
        view('us', compact('posts'));
    }
    public function form(){
        view('form');
    }
}
