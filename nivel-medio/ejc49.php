<?php
echo "49. Crear un script PHP que genera aleatoriamente un número y muestre si es perfecto. Un número es perfecto cuando es igual a la suma de sus divisores propios.<br>";

$numero = random_int(1, 1000);
$sumaDivisores = 0;

for ($divisor = 1; $divisor <= intdiv($numero, 2); $divisor++) {
    if ($numero % $divisor === 0) {
        $sumaDivisores += $divisor;
    }
}

echo "Número generado: $numero. Suma de divisores propios: $sumaDivisores.<br>";

if ($numero === $sumaDivisores) {
    echo "$numero es un número perfecto.";
} else {
    echo "$numero no es un número perfecto.";
}
?>
