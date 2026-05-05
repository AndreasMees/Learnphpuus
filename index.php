<?php 
// kui ainult php tekst, siis lõpu tagi pole vaja

// printimine, võivad olla ka sulud
echo "Hello World!\n";
echo ("Hello World!\n");

// muutjuad algavad dollari märgiga
$arv = 12;

echo $arv;
echo 'arv is $arv';
echo "\narv is $arv\n";

// tekstide liitmine on punktiga
echo $arv . "kuud\n";

$num = 1;
$num = $num + 1;
$num++;
$num--;
$num += 1;
$num -= 1;
$num *= 1;
$num /= 1;
$num %= 5;
$num = 1.3;
$num **=2;
$num = true;
$num = false;
$bar; // muutuja väärtus puudub (null)
var_dump($num);
var_dump($bar);