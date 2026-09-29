<?php
echo "18. Crea un script PHP que asina a variables el número de muñecos y el número de coches de juguete que hay en un paquete enviado por una agencia de transporte. Si un muñeco pesa 4 onzas y un coche de juguete pesa 2 libras, ¿cuánto pesa el paquete en Kg?<br>";

$munecos = 12;
$coches = 8;

$kgPorMuneco = 4 * 0.0283495;
$kgPorCoche = 2 * 0.453592;

$totalKg = ($munecos * $kgPorMuneco) + ($coches * $kgPorCoche);

echo "<br>El paquete pesa " . number_format($totalKg, 2) . " kg.";
?>
