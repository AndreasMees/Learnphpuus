<?php

$num = 15;
if ($num > 10) {
    var_dump('Suurem');
} else if ($num < 10) {
    var_dump('Väiksem');
} else {
    var_dump('Mitte kumbki');
}

$day = date('w', strottime('09.09.2025'));
var_dump($day);

switch($day) {
    case 1:
        var_dump('Esmaspäev');
        break;
    case 2:
        var_dump('Teisipäev');
        break;
    case 3:
        var_dump('Kolmapäev');
        break;
    case 4:
        var_dump('Neljapäev');
        break;
    case 5:
        var_dump('Reede');
        break;
    case 6:
        var_dump('Laupäev');
        break;
    case 7:
        var_dump('Pühapäev');
        break;
}