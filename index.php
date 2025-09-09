<?php

$bool = true && false;
$bool = true || false;
$bool = !false;
$bool = (true and false || false) && !(true || false && true);
var_dump($bool);