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

function sub(string $operacion , int ...$numbers) :int|float {
    switch ($operacion){
        case "suma":
            return array_sum($numbers);
        case "resta":
            $result = 0;
            foreach ($numbers as $number){
                $result = $result - $number;
            }
            return $result;
        case "multiplicacion":
            $result = 1;
            foreach ($numbers as $number){
                $result = $result * $number;
            }
            return $result;
        default:
            return 0;
    }
}

echo sub("multiplicacion", 3, 2, 1, 7, 5, 9, 5.0);

$x = 'sub';

if (is_callable($x)){
    echo $x("suma", 1, 2, 3, 4);
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
