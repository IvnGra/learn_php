<?php

$array = array(1, 2, 3, 4);
$array = [1, 2, 3, 4];
$array = [
    1,
    'hello',
    true,
    NULL,
    [1, 2, 3]
];
$array = [
    6 => 'lol',
    1,
    2,
    3,
    'name' => 'Ivan',
    'age' => '17',
    100000 => 69,
    'Hello World',
    'gender' => 'alpha gigachad',
    'isRacist' => true,
    4,
    5,
];
var_dump($array['name']);
$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
var_dump($array[2][1]);
$array = [1, 2, 3];
array_push($array, 4); 
array_push($array, 5, 6, 7);
$array[] = 8;
var_dump($array);
array_