<?php
echo "38. Crear un script PHP que muestre los cuadrados y cubos de dos números enteros generados aleatoriamente y con una diferencia entre ellos menor de 20.<br>";

$numero1 = random_int(1, 100);
$minimo = max(1, $numero1 - 19);
$maximo = min(100, $numero1 + 19);
$numero2 = random_int($minimo, $maximo);

foreach ([$numero1, $numero2] as $numero) {
    echo "Número: $numero, cuadrado: " . ($numero * $numero) . ", cubo: " . ($numero * $numero * $numero) . "<br>";
}
?>
