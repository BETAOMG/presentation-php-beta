<?php

$x = 5; /*ambito global*/

echo '<h2>Variable en include</h2>';

include ('script.php');

echo '<br>'.$x;



echo '<h2>Variable en funcion</h2>';

function test($a){
    echo $a; /*referencia a una variable en el ambito local*/
}

$a=1;

test($a);

echo '<h2>Funcion con global</h2>';

$a = 1;
$b = 2;

function suma(){
    global $a, $b;

    return $a + $b;
}

echo suma();

echo '<h2>Funcion con $GLOBALS</h2>';

function suma2(){
    return $GLOBALS['a'] + $GLOBALS['b'];
}



echo suma2();

echo '<h2>Variables predefinidas</h2>';

function test_global(){
    global $HTTP_POST_VARS;

    echo $HTTP_POST_VARS['name'];

    echo $_POST ['name'];
}

echo '<h2>Variables static</h2>';
echo '<h4>Sin static</h4>';
function statics(){

    $a = 0;
    echo $a;
    $a++;
}

statics();
echo '<br>';
statics();


echo '<h4>Con static</h4>';

function statics2(){
    static $a = 0;
    echo $a;
    $a++;
}

statics2();
echo '<br>';
statics2();

echo '<h4>Variables estaticas con funciones recursivas</h4>';

function statics3(){
    static $count = 0;

    $count++;
    echo $count;

    if ($count < 10){
        statics3();
    }
}

statics3();
