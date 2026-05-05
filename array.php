<?php
$array = array(1, 2, 3, 4); // vana
$array = [1, 2, 3, 4]; // uus
$array = [1, 'hello', true, NULL, [1, 2, 3, 4]];

// mix match array andmed
$array = [
    'name' => 'Andreas',
    'age' => 18,
    'gender' => 'Growtopia',
    'isCool' => true
];
$array = [
    6 => 'kuus',
    1,
    2,
    3,
    'name' => 'Andreas',
    'age' => 18,
    'hello world',
    'gender' => 'Growtopia',
    'isCool' => true,
    4,
];
var_dump($array);
var_dump($array['name']);

// array in array
$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
var_dump($array[2][1]);

// array push
$array = [1, 2, 3];
array_push($array, 4);
array_push($array, 4, 5, 6, 7);
$array[] = 8;
var_dump($array);