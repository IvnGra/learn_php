<?php

namespace App\Controllers;


use App\Models\User;

class PostsController
{
    public function registerForm()
    {
        setcookie('mycookie', 'tasty', time() + 60 * 60 * 24 * 30);
        dump($_COOKIE);
        session_start();
        $_SESSION['secret'] = 'shhhhh';

        dump($_SESSION);
    }   
}
