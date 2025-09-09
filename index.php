<?php
$num  = 15;
if ($num > 10) {
    var_dump('suurem');
} else {

};


$day = date('w', strtotime('2023-06-19'));
var_dump($day);
switch($day) {
    case 1:
        var_dump('esmaspäev');
        break;
    case 2:
        var_dump('teisipäev');
        break;
    case 3:
        var_dump('kolmapäev');
        break;
    case 4:
        var_dump('neljapäev');
        break;
    case 5:
        var_dump('reede');
        break;
    case 6:
        var_dump('laupäev');
        break;
    case 0:
        var_dump('pühapäev');
        break;
    default:
        var_dump('tundmatu päev');
        break;

}