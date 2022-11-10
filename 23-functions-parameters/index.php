<?php

declare(strict_types=1);

//public double MultiplicarNumeros (double n1 = 1, double n2=1)-


function MultiplicarNumeros(float $n1=1,float $n2=1) : float{
    return $n1 * $n2;
}

echo MultiplicarNumeros();

$x = 5.0;
$y = 10.0;

echo '<h2>Resultado</h2>';

echo MultiplicarNumeros($x, $y).'<br>';

echo '<h2>Valor variables</h2>';
var_dump($x, $y);