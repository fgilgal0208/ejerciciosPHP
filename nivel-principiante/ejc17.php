<?php
echo "17. Crea un script PHP que asigna a una variable una temperatura en ºC y muestre en pantalla su equivalente en ºK y ºF.<br>";

$gradosC = 25;
$kelvin = $gradosC + 273.15;
$fahrenheit = ($gradosC * 9 / 5) + 32;

echo "<br>$gradosC ºC equivalen a $kelvin ºK y $fahrenheit ºF.";
?>
