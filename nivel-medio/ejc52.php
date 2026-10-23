<?php
echo "52. Crear un script PHP que genera un número entero positivo y muestre cada número impar desde 1 hasta ese número, separado por coma.<br>";

$numero = random_int(1, 100);
$impares = [];

for ($impar = 1; $impar <= $numero; $impar += 2) {
    $impares[] = $impar;
}

echo "Número generado: $numero<br>";
echo implode(", ", $impares);
?>
