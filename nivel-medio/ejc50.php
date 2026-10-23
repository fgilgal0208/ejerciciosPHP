<?php
echo "50. Crear un script PHP que genera aleatoriamente un número y muestre si es primo. Un número es primo si no tiene divisores distintos de 1 y de sí mismo.<br>";

$numero = random_int(1, 100);
$esPrimo = $numero > 1;

for ($divisor = 2; $esPrimo && $divisor * $divisor <= $numero; $divisor++) {
    if ($numero % $divisor === 0) {
        $esPrimo = false;
    }
}

echo "Número generado: $numero.<br>";
echo $esPrimo ? "$numero es primo." : "$numero no es primo.";
?>
