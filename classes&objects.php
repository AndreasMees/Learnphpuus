<?php

class Cat {
    public function __construct() 
    {
        var_dump('Class was craeated');
    }
    public function __call($name, $args) 
    {
        var_dump($name, $args);
    }
    public function __get($name) 
    {
        var_dump($name);
        return 'Cool Meow';
    }
    public function __set($name, $value) 
    {
        var_dump($name, $value);
    }
    public function __toString() 
    {
        return 'Meow';
    }
    public function __destruct() 
    {
        var_dump('Class was destroyed');
    }
}

function makeCat() {
    $cat = new Cat();
}

$kitty = new Cat();
var_dump($kitty);
var_dump($kitty -> mood);
$kitty -> color = 'Rainbow';
$kitty -> throwBall('many', 'red', 'ball');
$kitty = 1;
unset($kitty);
var_dump('something');