<?php
echo "53. Crear un script PHP que genera aleatoriamente un número entero positivo y muestre la cuenta regresiva desde ese número hasta 0, separado por coma.<br>";

$numero = random_int(1, 100);
$cuentaRegresiva = [];

for ($actual = $numero; $actual >= 0; $actual--) {
    $cuentaRegresiva[] = $actual;
}

echo "Número generado: $numero<br>";
echo implode(", ", $cuentaRegresiva);
?>
