<?php

function hello() {
    var_dump('Hello');
}

hello();
hello();
hello();

funcito helloName($name = 'Unknown'){
    var_dump('Hello' . $name);
}

helloName('Ivan');
helloName('Gratsov');
helloNmae();

function helloNameAndAge($name = 'Unknown', $age){
    var_dump("Hello  $name and you are  $age  years old");
}

healloNameAndAge('Ivan', 30);

function stuff(...$args){
    var_dump($args);
}
stuff(1,2,3,4,5,6,7,8,9);

function sum($a, $b){
    return $a + $b;
    var_dump('This will never be executed');
}

$answer = sum(2,3);
var_dump($answer);

function biggerOrSmaller($a){
    if($a > 0){
        return 'Bigger';
    } 
        return 'Smaller';
}

var_dump(biggerOrSmaller(15));
var_dump(biggerOrSmaller(5));


function recursive($i) {
    if($i < 10 ) {
        var_dump($i);
        recursive($i + 1);
    }
}