<?php

for($i=0; $<10;$i++){
    var_dump($i);
}

for($i=10;$i>0;$i--){
    var_dump($i);
}  

for($i=1;$i<1000000;$i*=2){
    var_dump($i);
}

for(;;){

}

$time = time()
while(time()<$time+10){
    var_dump(time());
    $i++;
}
var_dump($i);

$i = 10;
while($i < 10){
    var_dump('WHILE');
}
do {
    var_dump('DO');
} while($i <10);

$array = [1,2,3];
foreach($array as $value){
    var_dump($value);
};

$a = 1;
$b =$a;
$b = 2;
var_dump($a);
