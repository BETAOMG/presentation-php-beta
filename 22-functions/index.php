<?php

echo "<h2>Sintaxis sencilla de una funcion</h2>";

function foo () /*:int*/
{
    return 'Hola mundo';
}

var_dump(foo());



echo "<h2>Funciones entro de otras funciones</h2>";


function foonction()
{
    echo "Foonction"."<br>";

    function bar()
    {
        echo "No existo hasta que se llame a foo().\n";
    }
}

/* No podemos llamar aún a bar()
   ya que no existe. */

foonction();

/* Ahora podemos llamar a bar(),
   el procesamiento de foo()
   la ha hecho accesible. */

bar();


echo "<h2>Funciones recursivas</h2>";

function recursividad($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursividad($a + 1);
    }
}

recursividad($a = 0);


