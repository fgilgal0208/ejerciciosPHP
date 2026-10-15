<?php
echo "41. Crear un script PHP que resuelva una ecuación lineal y = Ax + B para los primeros 5 números naturales. Se deben generar aleatoriamente entre -5 y 5 los dos coeficientes A y B.<br>";

$a = random_int(-5, 5);
$b = random_int(-5, 5);

echo "A = $a, B = $b<br>";

for ($x = 1; $x <= 5; $x++) {
    $y = ($a * $x) + $b;
    echo "Para x = $x, y = ($a × $x) + ($b) = $y<br>";
}
?>
