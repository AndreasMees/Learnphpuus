<?php

// classic for loop
for($i = 0; $i < 10; $i++) {
    var_dump($i);
}

for($i = 10; $i > 0; $i--) {
    var_dump($i);
}

for($i = 1; $i < 1_000; $i*=2) {
    var_dump($i);
}

// while loop
$time = time();
$i = 0
while(time() < $time + 1) {
    var_dump(time());
    $i++;
}
var_dump($i);

$i = 10
while($i < 10) {
    var_dump('WHILE');
} do {
    var_dump($i < 10);
} while($i < 10);

// foreach loop
$array = [1, 2, 3, 4]
foreach($array as $key => $value) {
    var_dump($key $value);
}

// pointer
$a = 1;
$b = &$a;
$b = 2;
var_dump($a);

foreach($array as &$value) {
    $value *= 2;
}

var_dump($array);