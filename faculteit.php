<?php
// input * input-- = new value;
// new value * i--; * input

$computter1 = 'Van welk getal wil je de faculteit weten?'.PHP_EOL;

$n = readline("");
$x = 1;
for ($i = 0; $i <= $n-1; $i++){
    $x*=($i+1);
    
}
    echo 'De faculteit van ', $n, ' is ', $x;


?>