<?php

function hello() {
    var_dump('Hello');
}
hello();

function helloName($name = 'idk') {
    var_dump('Hello ' . $name);
}
helloName('Martin');
helloName();

function helloNameAndAge($name = 'idk', $age = 'idk') {
    var_dump("Hello $name and you are $age years old");
}
helloNameAndAge('Martin', 18);
helloNameAndAge();

// ... spread operator
function stuff(...$argument) {
    var_dump(...$argument);
}
stuff(1, 2, 3, 4, 5, 6, 7);

// return
function sum($a, $b) {
    return $a + $b;
}
$answer = sum(1, 5);
var_dump("E $answer");

function biggerOrSamller($a) {
    if($a > 10) {
        return 'Bigger';
    }
    else if($a < 10) {
        return 'Smaller';
    }
}

var_dump(biggerOrSamller(15));
var_dump(biggerOrSamller(5));