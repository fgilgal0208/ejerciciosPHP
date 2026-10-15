<?php
echo "35. Crear un script PHP que calcule y muestre el factorial de un número.<br>";

$numero = random_int(0, 10);
$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}

echo "El factorial de $numero es $factorial.";
?>
