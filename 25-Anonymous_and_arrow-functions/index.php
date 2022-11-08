<?php

echo '<h2>Funciones variables</h2>';

function foo(){
    echo 'Soy la funcion foo <br>';
}

$fu = 'foo';
$fu();

function bar($arg = ''){
    echo 'En la funcion bar el argumento es '.$arg.'<br>';
}

$barra = 'bar';
$barra('prueba');

function hacerhecho($cadena){
    echo $cadena;
}

$hacer = 'hacerhecho';
$hacer('Prueba de funcion hacerhecho');

echo '<h2>Callable</h2>';

function sub(int|float ...$numbers) :int|float {
    return array_sum($numbers);
}

$x = 'sum';

if (is_callable($x)){
    echo $x(1, 2, 3, 4);
}else{
    echo 'Not callable <br>';
}

$x = 1;

$sum2 = function(int|float ...$numbers) use ($x): int|float{
    echo $x.'<br>';
    return array_sum($numbers);
};

echo $sum2(1, 2, 3, 4);

echo '<h2>Arrow functions</h2>';

$y = 1;

$fn1 = fn($x) => $x + $y;

/*equivale a*/

$fn2 = function($x) use ($y){
    return $x + $y;
};

echo $fn1(6).'<br>';

/*Funciones anidadas*/

$z = 1;

$fn = fn($x) => fn($y) => $x * $y + $z;

echo $fn(5)(10);
