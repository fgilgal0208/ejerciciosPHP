<?php
echo "39. Crear un script PHP que genera hasta un máximo de 100 números aleatorios o hasta que la suma de sus cuadrados sea mayor que 10.000 y menor que 11.000. Al final, muestra también cuántos de ellos son impares.<br>";

$numeros = [];
$sumaCuadrados = 0;
$cantidadImpares = 0;

while (count($numeros) < 100 && !($sumaCuadrados > 10000 && $sumaCuadrados < 11000)) {
    $numero = random_int(1, 100);
    $numeros[] = $numero;
    $sumaCuadrados += $numero * $numero;

    if ($numero % 2 !== 0) {
        $cantidadImpares++;
    }
}

echo "Números generados: " . implode(", ", $numeros) . "<br>";
echo "Suma de sus cuadrados: $sumaCuadrados<br>";
echo "Cantidad de números impares: $cantidadImpares<br>";

if ($sumaCuadrados <= 10000 || $sumaCuadrados >= 11000) {
    echo "Se alcanzó el máximo de 100 números sin que la suma quedara entre 10.000 y 11.000.";
} else {
    echo "La suma quedó entre 10.000 y 11.000.";
}
?>
