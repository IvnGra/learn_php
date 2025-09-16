<?php

class Cat {
    public function __construct() 
    {
        var_dump('Class was created');
    }

    public function __call($name, $value) {
        var_dump($name, $value);
    }

    public function __get() {
        var_dump($name);
        return 'Cool shiiit';
    }

    public function __set($name, $value) {
        var_dump($name, $value);
    }

    public function __toString()
    {
        return 'mjäu';
    }

    public function __destruct()
    {
        var_dump('class was destroyed');
    }
}

function makeCat() {
    $cat = new Cat();
}

$kitty = new Cat();
var_dump($kitty);
var_dump($kitty->mood);
$kitty->color 
$kitty->thirowShit('')
echo($kitty);
$kitty = 1;
var_dump('something');