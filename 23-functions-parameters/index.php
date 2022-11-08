<?php

/*declare(strict_types=1);*/

function foo(int/*|float*/ $x,int $y){
    return $x * $y;
}

$x = 5.0;
$y = '10';

echo '<h2>Resultado</h2>';

echo foo($x, $y).'<br>';

echo '<h2>Valor variables</h2>';
var_dump($x, $y);