<?php
echo "28. Crea un script PHP que asigna dos números enteros positivos a dos variables, X y N. A continuación calcula y muestra la potencia N de X. (No utilizar el operador de potencia).<br>";

$x = random_int(1, 10);
$n = random_int(1, 10);
$potencia = 1;

for ($i = 1; $i <= $n; $i++) {
    $potencia *= $x;
}

echo "<br>X = " . $x;
echo "<br>N = " . $n;
echo "<br>La potencia " . $n . " de " . $x . " es: " . $potencia;

